<?php

use yii\helpers\HTML;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */

$this->title = 'MyMart';
?>
<div class="site-index">
    

    <div class="body-content">


        <div class="row">

<br><br>
            <div class="row">
                <form method="get">
                    <label>Cari Produk Berdasarkan Kategori</label>
                    <select name="category">
                        <?php foreach ($category as $c) { ?>
                            <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                        <?php  } ?>
                    </select>
                    <button value="submit">Cari</button>
                </form>
                <h4> total item : <?= $dataCount ?></h4>
                <div class="col-lg-12 text-center">
                    <h1>Product From Our Store</h1>
                    <hr>
                </div>
        </div>
        <div class="row">
            <?php foreach ($data as $p) { ?>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img width="100%" height="200px" style="object-fit: cover;" src="<?= yii::getAlias('@Uploads').'/'.$p['image']?>">
                        </div>
                        <div class="panel-footer">
                            <b><?=$p['name'] ?></b>
                            <span class="pull-right badge"> Rp. <?= number_format($p['price']) ?></span>
                        </div>
                        <div class="col-md-6">
                            <?php
                                $ID = $p['id'];
                                if(yii::$app->user->isGuest) {
                                    echo HTML::a('Silahkan Login Dulu', ['/site/login'], ['class' => 'btn btn-danger']);
                                }
                                else{
                                    echo HTML::a('Masukkan ke Keranjang', ['/order/index'], ['class' => 'btn btn-success']);

                                }
                             ?>
                        </div>
                    </div>
                </div>
          <?php  } ?>
    </div>
    <?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages,]); ?>
</div>
</div>
</div>
