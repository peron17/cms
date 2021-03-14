<?php
if (!function_exists('renderActionMenu')) {
    /**
     * @param array $array
     */
    function renderActionMenu($array = []) 
    {
        if (array_key_exists('manage', $array)) {
            if (array_key_exists('url', $array['manage'])) {
                $label = array_key_exists('label', $array['manage']) ? $array['manage']['label'] : '<i class="fa fa-list-alt"></i> Manage';
                echo '<a href="' . $array['manage']['url'] . '" class="btn btn-primary">' . $label . '</a>';
            }
        }

        if (array_key_exists('create', $array)) {
            if (array_key_exists('url', $array['create'])) {
                $label = array_key_exists('label', $array['create']) ? $array['create']['label'] : '<i class="fa fa-plus"></i> Create';
                echo '<a href="' . $array['create']['url'] . '" class="btn btn-primary">' . $label . '</a>';
            }
        }

        if (array_key_exists('delete', $array)) {
            if (array_key_exists('url', $array['delete'])) {
                $label = array_key_exists('label', $array['delete']) ? $array['delete']['label'] : '<i class="fa fa-times"></i> Delete';
                echo '<a href="' . $array['delete']['url'] . '" class="btn btn-secondary">' . $label . '</a>';
            }
        }

        if (array_key_exists('edit', $array)) {
            if (array_key_exists('url', $array['edit'])) {
                $label = array_key_exists('label', $array['edit']) ? $array['edit']['label'] : '<i class="fa fa-edit"></i> edit';
                echo '<a href="' . $array['edit']['url'] . '" class="btn btn-primary">' . $label . '</a>';
            }
        }

        if (array_key_exists('view', $array)) {
            if (array_key_exists('url', $array['view'])) {
                $label = array_key_exists('label', $array['view']) ? $array['view']['label'] : '<i class="fa fa-search"></i> view';
                echo '<a href="' . $array['view']['url'] . '" class="btn btn-primary">' . $label . '</a>';
            }
        }
    }
}