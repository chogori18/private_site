<?php

if (!empty($options)) {
    $this->Paginator->options(['url' => $options]);
}

// 応急処置的にページ番号表示
// 現在のページ
$current_page = $this->Paginator->current();
// 全ページ数
$total_pages = $this->Paginator->params()['pageCount'];

$page_num = '';
$page_num .= $current_page;
$page_num .= '/';
$page_num .= $total_pages;
$page_num .= ' ページ';

?>

<?php if ($this->Paginator->hasNext() || $this->Paginator->hasPrev()) :?>
    <div class="pagination">
        <?= $this->Paginator->before() ?>
        <div class="pagination__nav"><?= h($page_num); ?></div>
        <?= $this->Paginator->after() ?>
    </div>
<?php endif; ?>
