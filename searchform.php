<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
    <div class="search-form__btn">
        <input type="submit" class="search-submit" value="" />
        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
            <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#1C212E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <label>
        <input type="search" class="search-field" placeholder="<?= pll__('Пошук', 'casinos') ?>" value="<?php echo get_search_query() ?>" name="s" />
    </label>
</form>