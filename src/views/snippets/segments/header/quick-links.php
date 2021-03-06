<div class="ml-auto">
    <!-- Jump To -->
    <div class="d-inline-block d-sm-none position-relative mr-2">
        <a id="jumpToDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;"
            role="button" aria-controls="jumpToDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover"
            data-unfold-target="#jumpToDropdown" data-unfold-type="css-animation" data-unfold-duration="300"
            data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
            data-unfold-animation-out="fadeOut">
            More
        </a>

        <?php

echo '<div id="jumpToDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="jumpToDropdownInvoker">';
foreach ($data->quick_links as $label => $link) {
    $label = trim($label);
    $link = Core\Commons::slugify($link);    
    echo '<a class="dropdown-item" href="'.$link.'">'.$label.'</a>';
}
echo '</div>';

?>

    </div>
    <!-- End Jump To -->

    <!-- Links -->
    <div class="d-none d-sm-inline-block ml-sm-auto">
        <ul class="list-inline mb-0">

            <?php

echo '<li class="list-inline-item mr-0">';
foreach ($data->quick_links as $label => $link) {
    $label = trim($label);
    $link = Core\Commons::slugify($link);    
    echo '<a class="u-header__navbar-link" href="'.$link.'">'.$label.'</a>';
}
echo '</li>';

?>

        </ul>
    </div>
    <!-- End Links -->
</div>



<ul class="list-inline ml-2 mb-0">

    <li title="GitHub Profile" class="list-inline-item">
        <a class="btn btn-xs btn-icon btn-text-secondary" href="https://www.github.com/RAKWireless/" role="button">
        <span class="fab fa-github btn-icon__inner font-size-1"></span>
        </a>
    </li>

    <li title="Store Cart" class="list-inline-item position-relative">
        <a class="btn btn-xs btn-icon btn-text-secondary" href="https://store.rakwireless.com/account/login" role="button">
        <span class="fas fa-shopping-cart btn-icon__inner"></span>
        </a>
    </li>

    <li title="Store Account" class="list-inline-item">
        <a class="btn btn-xs btn-icon btn-text-secondary" href="https://store.rakwireless.com/account/login" role="button">
        <span class="fas fa-user-circle btn-icon__inner font-size-1"></span>
        </a>
    </li>

</ul>