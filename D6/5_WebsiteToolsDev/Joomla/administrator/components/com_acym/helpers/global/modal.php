<?php

function acym_modal($button, $data, $id = null, $attributesModal = '', $attributesButton = '', $isButton = true, $isLarge = true)
{
    if (empty($id)) {
        $id = 'acymodal_'.rand(1000, 9000);
    }

    $buttonParams = '';
    if (is_array($attributesButton)) {
        foreach ($attributesButton as $oneAttribute => $oneValue) {
            $buttonParams .= ' '.$oneAttribute.'="'.acym_escape($oneValue).'"';
        }
    } else {
        $buttonParams = $attributesButton;
    }

    $modal = $isButton ? '<button type="button" data-open="'.$id.'" '.$buttonParams.'>'.$button.'</button>' : $button;
    $modal .= '<div class="reveal" '.($isLarge ? 'data-reveal-larger' : '').' id="'.$id.'" '.$attributesModal.' data-reveal>';
    $modal .= $data;
    $modal .= '<button class="close-button" data-close aria-label="Close reveal" type="button">';
    $modal .= '<span aria-hidden="true">&times;</span>';
    $modal .= '</button></div>';

    return $modal;
}

function acym_modal_include($button, $file, $id, $data, $attributes = '', $classModal = '', $containerAttributes = '')
{
    return acym_modalInclude($button, $file, $id, $data, $attributes = '', $classModal = '', $containerAttributes = '');
}

function acym_modalInclude($button, $file, $id, $data, $attributes = '', $classModal = '', $containerAttributes = '')
{
    if (empty($id)) {
        $id = 'acymodal_'.rand(1000, 9000);
    }

    $dataModal = $data;

    $modal = '<div data-open="'.acym_escape($id).'" '.$containerAttributes.'>'.$button;
    $modal .= '<div class="reveal '.$classModal.'" id="'.acym_escape($id).'" '.$attributes.' data-reveal>';
    ob_start();
    include $file;
    $modal .= ob_get_clean();
    $modal .= '<button type="button" class="close-button" data-close aria-label="Close reveal">';
    $modal .= '<span aria-hidden="true">&times;</span>';
    $modal .= '</button></div></div>';

    return $modal;
}

function acym_modalPaginationLists($inputEventId = '', $checkedLists = '[]', $needDisplaySubscribers = false, $attributesModal = '')
{
    $searchField = acym_filterSearch('', 'modal_search_lists');

    $data = '';
    if (!empty($inputEventId)) {
        $data .= '<input type="hidden" id="'.$inputEventId.'">';
    }
    if ($needDisplaySubscribers) {
        $data .= '<input type="hidden" id="modal__pagination__need__display__sub">';
    }

    $data .= '<div class="cell grid-x" '.$attributesModal.'>
            <input type="hidden" name="show_selected" value="false" id="modal__pagination__show-information">
            <input type="hidden" id="modal__pagination__search__lists">
            <input type="hidden" name="lists_selected" id="acym__modal__lists-selected" value="'.acym_escape($checkedLists).'">
            <div class="cell grid-x">
                <h4 class="cell text-center acym__title acym__title__secondary">'.acym_translation('ACYM_CHOOSE_LISTS').'</h4>
            </div>
            <div class="cell grid-x modal__pagination__search">
                '.$searchField.'
            </div>
            <div class="cell text-center padding-top-1" id="modal__pagination__search__spinner" style="display: none">
                <i class="acymicon-circle-o-notch acymicon-spin"></i>
            </div>
            <div class="cell medium-6 modal__pagination__show">
                <a href="#" class="acym__color__blue modal__pagination__show-selected modal__pagination__show-button selected">'.acym_translation('ACYM_SHOW_SELECTED_LISTS').'</a>
                <a href="#" class="acym__color__blue modal__pagination__show-all modal__pagination__show-button">'.acym_translation('ACYM_SHOW_ALL_LISTS').'</a>
            </div>
            <div class="cell grid-x modal__pagination__listing__lists">
                <div class="cell modal__pagination__listing__lists__in-form"></div>
            </div>
            </div>';

    return $data;
}
