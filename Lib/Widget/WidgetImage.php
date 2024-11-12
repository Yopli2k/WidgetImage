<?php
/**
 * This file is part of WidgetImage plugin for FacturaScripts.
 * FacturaScripts Copyright (C) 2015-2024 Carlos Garcia Gomez <carlos@facturascripts.com>
 * WidgetRichText Copyright (C) 2024-2024 Jose Antonio Cuello Principal <yopli2000@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Plugins\WidgetImage\Lib\Widget;

use FacturaScripts\Core\Lib\Widget\BaseWidget;
use FacturaScripts\Dinamic\Model\AttachedFile;

/**
 * Add a TinyMCE editor to the textarea.
 *
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class WidgetImage extends BaseWidget
{

    /**
     * HTML for show the widget value.
     *
     * @param object $model
     * @param string $title
     * @param string $description
     * @param string $titleurl
     *
     * @return string
     */
    public function edit($model, $title = '', $description = '', $titleurl = '')
    {
        $this->setValue($model);
        $file = new AttachedFile();
        $file->loadFromCode($this->value);
        return '<img src="' . $file->url('download-permanent') . '"'
            . ' alt="' . $file->filename . '"'
            . ' class="img-fluid img-thumbnail"'
            . '>';
    }

    /**
     * Return the HTML code for the input form.
     *
     * @param string $type
     * @param string $extraClass
     * @return string
     */
    protected function inputHtml($type = 'hidden', $extraClass = '')
    {
        return '';
    }
}
