<?php 
    use yii\widgets\LinkPager;
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use common\models\widgets;
 ?>
                            <div class="panel panel-default margin-b-30 ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Candidatos</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr> 
                                                <th>Nombre</th>
                                                <th>Foto</th>
                                                <th>Twitter</th>
                                                <th>Facebook</th>
                                                <th>Ranking</th>
                                                <th>Partido</th>
                                                <th>Su 3 de 3</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($models as $model) { ?>
                                            <tr>
                                                <td><?= $model->nombre ?></td>
                                                <td><img src= "<?= ($model->foto=="")? "https://pbs.twimg.com/profile_images/378800000456947326/fa6ab8957e1aeab10db7bf3960dc2ba4_bigger.jpeg": $model->foto ?>"></td>
                                                
                                                <td><a href="https://twitter.com/<?= $model->twitter ?>" target="_blank"><img src="http://kylebarbour.org/tmg/media/tmgtwitter-logo.jpg" alt=""></a></td>
                                                
                                                <td><a href="https://facebook.com/<?= $model->facebook ?>" target="_blank"><img src="http://pbs.twimg.com/profile_images/3513354941/24aaffa670e634a7da9a087bfa83abe6_bigger.png" alt=""></a></td>
                                                
                                                <td> <?php for($c = 1; $c <= $model->ranking; $c++){  ?>
                                                    <img src="http://phuketbestfood.com/beta/th/images/star_icon.png">
                                                    <?php } ?>
                                                </td>
                                        
                                                <td><?= widgets::getPartido($model->partido_key_id)?></td>
                                                <td></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- End .panel -->  
                            <?php 
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
?>
