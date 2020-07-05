<?php

namespace Sunxyw\Console;

class Console
{
    public static $styles = [
        'normal' => '',
        'error' => 'red',
        'warning' => 'yellow',
        'info' => 'lightblue',
        'success' => 'green',
        'verbose' => 'blue',
        'debug' => 'gray',
    ];

    public static function setColor($string, $color = "")
    {
        switch ($color) {
            case "red":
                return "\x1b[38;5;203m" . $string . "\x1b[m";
            case "green":
                return "\x1b[38;5;83m" . $string . "\x1b[m";
            case "yellow":
                return "\x1b[38;5;227m" . $string . "\x1b[m";
            case "blue":
                return "\033[34m" . $string . "\033[0m";
            case "pink":
            case "lightpurple":
                return "\x1b[38;5;207m" . $string . "\x1b[m";
            case "lightblue":
                return "\x1b[38;5;87m" . $string . "\x1b[m";
            case "gold":
                return "\x1b[38;5;214m" . $string . "\x1b[m";
            case "gray":
                return "\x1b[38;5;59m" . $string . "\x1b[m";
            case "lightlightblue":
                return "\x1b[38;5;63m" . $string . "\x1b[m";
            default:
                return $string;
        }
    }

    public static function setPrefix($string, $prefix)
    {
        $date = date('Y-m-d H:i:s');
        return "[{$date}] [{$prefix}] {$string}";
    }

    public static function println($message, $style = 'normal')
    {
        $prefix = ucfirst(substr($style, 0, 1));
        $message = self::setPrefix($message, $prefix);
        echo self::setColor($message . "\n", self::$styles[$style]);
    }

    public static function error($message)
    {
        self::println($message, 'error');
    }

    public static function warning($message)
    {
        self::println($message, 'warning');
    }

    public static function info($message)
    {
        self::println($message, 'info');
    }

    public static function success($message)
    {
        self::println($message, 'success');
    }

    public static function verbose($message)
    {
        self::println($message, 'verbose');
    }

    public static function debug($message)
    {
        self::println($message, 'debug');
    }
}
