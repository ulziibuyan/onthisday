<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Skybluesofa\OnThisDay\Data\Region\En\Us\Helpers\Easter;
use Carbon\Carbon;

class March extends Month {
    public static $recurringEvents = [
       "1" => ["Peanut Butter Lover's Day", "Fruit Compote Day"],
       "2" => ["Banana Cream Pie Day"],
       "3" => ["Cold Cuts Day", "Mulled Wine Day"],
       "4" => ["Poundcake Day"],
       "5" => ["Cheese Doodle Day"],
       "6" => ["Frozen Food Day", "White Chocolate Cheesecake Day"],
       "7" => ["Crown Roast of Pork Day", "Cereal Day"],
       "8" => ["Peanut Cluster Day"],
       "9" => ["Crabmeat Day"],
      "10" => ["Blueberry Popover Day"],
      "11" => ["Oatmeal Nut Waffles Day"],
      "12" => ["Baked Scallops Day"],
      "13" => ["Coconut Torte Day"],
      "14" => ["Potato Chip Day"],
      "15" => ["Peanut Lovers Day", "Pears Helene Day"],
      "16" => ["Artichoke Heart Day"],
      "18" => ["Lacy Oatmeal Cookie Day"],
      "17" => ["Saint Partrick's Day"],
      "19" => ["Poultry Day", "Chocolate Caramel Day"],
      "20" => ["Ravioli Day"],
      "21" => ["French Bread Day"],
      "23" => ["Chip and Dip Day", "Melba Toast Day"],
      "24" => ["Chocolate Covered Raisins Day"],
      "25" => ["Lobster Newburg Day"],
      "26" => ["Waffle Day", "Nougat Day"],
      "27" => ["Spanish Paella Day"],
      "28" => ["Black Forest Cake Day"],
      "29" => ["Lemon Chiffon Cake Day"],
      "30" => ["Turkey Neck Soup Day"],
      "31" => ["Clams on the Half Shell Day", "World Backup Day"]
    ];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [
      "Fat Tuesday" => "_getFatTuesdayDate",
      "Mardi Gras" => "_getMardiGrasDate",
    ];

    public static $recurringAdvancedConfigurationHolidays = [
      "Easter" => "_getEasterDate",
    ];

    public static function _getFatTuesdayDate(Carbon $date) {
      return Easter::getFatTuesdayDate($date);
    }

    public static function _getMardiGrasDate(Carbon $date) {
      return Easter::getMardiGrasDate($date);
    }

    public static function _getEasterDate(Carbon $date) {
      return Easter::getEasterDate($date);
    }

}
