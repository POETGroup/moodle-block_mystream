<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Mystream block definition
 *
 * @package    contrib
 * @subpackage block_mystream
 * @copyright  2016 The POET Group
 * @author     Mike Churchward - mike.churchward@poetgroup.org
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_mystream;

defined('MOODLE_INTERNAL') || die();

/**
 * Class used to define the standard data structures used to manage stream information.
 *
 * @copyright  2016 The POET Group
 * @author     Mike Churchward - mike.churchward@poetgroup.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class stream_data {

    /* @var string Identifier for type of data. */
    public $infotype;

    /* @var string Icon to display for data. */
    public $icon;

    /* @var string Content for data display. */
    public $content;

    /**
     *
     * Class constructor.
     *
     * @param $infotype string Identifier for type of data.
     * @param $icon string Icon to display for data.
     * @param $content string Content for data display.
     */
    public function __construct($infotype = '', $icon = '', $content = '') {
        $this->infotype = $infotype;
        $this->icon = $icon;
        $this->content = $content;
    }
}