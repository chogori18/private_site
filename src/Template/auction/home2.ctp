<h2><?=$authuser['username'] ?> のホーム</h2>
<h3>※出品情報</h3>
<table cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th class="main" scope="col"><?= $this->Paginator->sort('iteminfo') ?></th>
        <th scope="col"><?= $this->Paginator->sort('image') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
        <th scope="col" class="actions"><?= __('Delete') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($biditems as $biditem): ?>
        <tr>
            <td><?= h($biditem->id) ?></td>
            <td><?= h($biditem->name) ?></td>
            <td><?= h($biditem->iteminfo) ?></td>
            <td class="action">
                <?= $this->Html->image($biditem->image, ['width'=>'100','height'=>'100','alt'=>'商品の画像']) ?>
            </td>
            <td><?= h($biditem->created) ?></td>
            <td class="action">
                <?php if (!empty($biditem->bidinfo)): ?>
                <?= $this->Html->link(__('View'), ['action' => 'msg', $bidinfo->id]) ?>
                <?php endif; ?>
            </td>
            <td>
                <?= $this->Form->postLink(__('Delete'), 
                    ['action' => 'delete', $biditem->id],
                    ['confirm' => __('削除してよろしいでしょうか。# {0}?', $biditem->id)]
                ) ?>
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
<h6><?= $this->Html->link(__('<< 落札情報に戻る'), ['action' => 'home']) ?></h6>
