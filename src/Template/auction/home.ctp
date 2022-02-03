<h2><?=$authuser['username'] ?> のホーム</h2>
<h3>※落札情報</h3>
<table cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th class="main" scope="col"><?= $this->Paginator->sort('iteminfo') ?></th>
        <th scope="col"><?= $this->Paginator->sort('image') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($bidinfo as $info): ?>
        <tr>
            <td><?= h($info->id) ?></td>
            <td><?= h($info->name) ?></td>
            <td><?= h($info->iteminfo) ?></td>
            <td><?= $this->Html->image($biditem->image, ['width'=>'100','height'=>'100','alt'=>'商品の画像']) ?></td>
            <td><?= h($info->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'msg', $info->id]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
</tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
</div>
<h6><?= $this->Html->link(__('出品情報に移動 >>'), ['action' => 'home2']) ?></h6>
