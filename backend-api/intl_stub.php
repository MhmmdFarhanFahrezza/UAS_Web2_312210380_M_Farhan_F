<?php
if (!class_exists('Locale')) {
    class Locale {
        public static function getDefault() { return 'en'; }
        public static function setDefault($locale) { return true; }
    }
}

if (!class_exists('NumberFormatter')) {
    class NumberFormatter {
        const DECIMAL = 1;
        public function __construct($locale, $style) {}
        public function format($value) { return $value; }
    }
}

if (!class_exists('IntlDateFormatter')) {
    class IntlDateFormatter {
        const LONG = 1;
        const MEDIUM = 2;
        const SHORT = 3;
        const NONE = 0;
        public function __construct($locale, $datetype, $timetype, $timezone = null, $calendar = null, $pattern = null) {}
        public function format($value) { return date('Y-m-d H:i:s', $value); }
    }
}
