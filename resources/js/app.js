require('./bootstrap');
require('bootstrap-select');

import moment from "moment";

window.moment = moment;

import $ from 'jquery';
window.$ = window.jQuery = $;

import "jquery-ui/ui/widgets/datepicker.js";
