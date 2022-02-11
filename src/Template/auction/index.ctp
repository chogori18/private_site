<h2>ミニオークション!</h2>
<h3>※出品されている商品</h3>
<table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
        <th scape="col"><?= $this->Paginator->sort('id') ?></th>
        <th scape="col"><?= $this->Paginator->sort('name') ?></th>
        <th class="main" scape="col"><?= $this->Paginator->sort('iteminfo') ?></th>
        <th scape="col"><?= $this->Paginator->sort('image') ?></th>
        <th scape="col"><?= $this->Paginator->sort('finished') ?></th>
        <th scape="col"><?= $this->Paginator->sort('endtime') ?></th>
        <th scape="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($auction as $biditem): ?>
        <tr>
            <td><?= h($biditem->id) ?></td>
            <td><?= h($biditem->name) ?></td>
            <td><?= h($biditem->iteminfo) ?></td>
            <td class="action">
                <?= $this->Html->image($biditem->image ,['width'=>'100','height'=>'100','alt'=>'商品の画像']) ?>
            </td>
            <td><?= h($biditem->finished ? 'Finished':'') ?></td>
            <td><?= h($biditem->endtime) ?></td>
            <td class="action">
                <?= $this->Html->link(__('View'), ['action' => 'view', $biditem->id]) ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <?php // サービス一覧
    ?>
    <?= $this->element('public_paginator', ['params' => $params]) ?>

    </tbody>
</table>
<!-- <div class="paginator">
    <ul class="pagination">
        
    </ul>
</div> -->