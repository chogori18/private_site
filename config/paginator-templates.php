<?php
return [
    'nextActive' => '<li class="pagenation__item pagenation__item--next"><a rel="next" href="{{url}}" class="pagenation__link">{{text}}</a></li>',
    'nextDisabled' => '<li class="pagenation__item pagenation__item--next is-inactive">{{text}}</li>',
    'prevActive' => '<li class="pagenation__item pagenation__item--prev"><a rel="prev" href="{{url}}" class="pagenation__link">{{text}}</a></span>',
    'prevDisabled' => '<li class="pagenation__item pagenation__item--prev is-inactive">{{text}}</li>',
    'number' => '<li class="pagenation__item pagenation__item--{{text}}"><a href="{{url}}" class="pagenation__link">{{text}}</a></li>',
    'current' => '<li class="pagenation__item pagenation__item--{{text}}" is-active"><a href="{{url}}" class="pagenation__link">{{text}}</a></li>',
    'first' => '<li class="pagenation__item pagenation__item--first"><a href="{{url}}" class="pagenation__link">{{text}}</a></li>',
    'last' => '<li class="pagenation__item pagenation__item--end"><a href="{{url}}" class="pagenation__link">{{text}}</a></li>',
    'firstDisabled' => '<li class="pagenation__item pagenation__item--first is-inactive">{{text}}</li>',
    'lastDisabled' => '<li class="pagenation__item pagenation__item--end is-inactive">{{text}}</li>',
    // リニューアルデザイン用
    'afterActive' => '<a rel="next" href="{{url}}" class="pagination__link"><div class="pagination__arrow right active"></div></a>',
    'afterDisabled' => '<div class="pagination__arrow right"></div>',
    'currentPage' => '<div class="pagination__nav">1/20 ページ</div>',
    'beforeActive' => '<a rel="prev" href="{{url}}" class="pagination__link"><div class="pagination__arrow left active"></div></a>',
    'beforeDisabled' => '<div class="pagination__arrow left"></div>'
];

/* Default
'templates' => [
            'nextActive' => '<li class="next"><a rel="next" href="{{url}}">{{text}}</a></li>',
            'nextDisabled' => '<li class="next disabled"><a href="" onclick="return false;">{{text}}</a></li>',
            'prevActive' => '<li class="prev"><a rel="prev" href="{{url}}">{{text}}</a></li>',
            'prevDisabled' => '<li class="prev disabled"><a href="" onclick="return false;">{{text}}</a></li>',
            'counterRange' => '{{start}} - {{end}} of {{count}}',
            'counterPages' => '{{page}} of {{pages}}',
            'first' => '<li class="first"><a href="{{url}}">{{text}}</a></li>',
            'last' => '<li class="last"><a href="{{url}}">{{text}}</a></li>',
            'number' => '<li><a href="{{url}}">{{text}}</a></li>',
            'current' => '<li class="active"><a href="">{{text}}</a></li>',
            'ellipsis' => '<li class="ellipsis">...</li>',
            'sort' => '<a href="{{url}}">{{text}}</a>',
            'sortAsc' => '<a class="asc" href="{{url}}">{{text}}</a>',
            'sortDesc' => '<a class="desc" href="{{url}}">{{text}}</a>',
            'sortAscLocked' => '<a class="asc locked" href="{{url}}">{{text}}</a>',
            'sortDescLocked' => '<a class="desc locked" href="{{url}}">{{text}}</a>',
        ]
 */
