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

namespace mod_bigbluebuttonbn\local\extension;

/**
 * A class to provide alternate BigBlueButton server configuration for an instance.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2026 onwards
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class server_config_addons {
    /**
     * Return server configuration overrides for the specified instance.
     *
     * Supported keys are server_url, shared_secret, and checksum_algorithm.
     *
     * @param int|null $instanceid BigBlueButtonBN instance id.
     * @return array
     */
    public function get_server_config(?int $instanceid = null): array {
        return [];
    }
}
