require('./bootstrap');
require('bootstrap-select');

import moment from "moment";
window.moment = moment;

import "jquery-ui/ui/widgets/datepicker.js";


$(document).ready( function () {
    $('#table_quotes').DataTable();
} );