<?php

namespace Kucil\Components\Utilities\Contracts;

use Kucil\Components\Utilities\Enums\IntegerRoundType;

/**
 * @author  MenyongMenying <menyongmenying.main@email.com>
 * 
 * @version 0.0.1
 * 
 * 
 */
interface IntegerCoreInterface
{
    /**
     * Memeriksa apakah nilai yang diberikan merupakan data bertipe boolean.
     * 
     * Meneruskan `true` jika nilai yang diberikan merupakan data bertipe boolean.
     * Jika bukan, maka akan meneruskan `false`.
     * 
     * Apabila nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed     $integer Nilai yang akan diperiksa.
     *
     * @return null|bool          `true` jika nilai $integer bertipe data integer, dan `false` jika tidak.
     * 
     * @see    IntegerUtilsTest::testIsInteger()
     * 
     * 
     */
    public static function isInteger(mixed $integer): null|bool;

    /**
     * Memeriksa apakah nilai integer yang diberikan merupakan bilangan positif.
     * 
     * Meneruskan `true` jika nilai integer yang diberikan merupakan bilangan positif.
     * Jika bukan, maka akan meneruskan `false`.
     * 
     * Apabila nilai integer yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  int       $integer Nilai integer yang akan diperiksa.
     *
     * @return null|bool          `true` jika nilai $integer merupakan bilangan positif, dan `false` jika tidak.
     * 
     * @see    IntegerUtilsTest::testIsPositiveNumber()
     * 
     * 
     */
    public static function isPositiveNumber(int $integer): null|bool;

    /**
     * Memeriksa apakah nilai integer yang diberikan merupakan bilangan genap.
     * 
     * Meneruskan `true` jika nilai integer yang diberikan merupakan bilangan genap.
     * Jika bukan, maka akan meneruskan `false`.
     * 
     * Apabila nilai integer yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  int       $integer Nilai integer yang akan diperiksa.
     *
     * @return null|bool          `true` jika nilai $integer merupakan bilangan genap, dan `false` jika tidak.
     * 
     * @see    IntegerUtilsTest::testIsEvenNumber()
     * 
     * 
     */
    public static function isEvenNumber(int $integer): null|bool;

    /**
     * Meneruskan jumlah digit dari nilai integer yang diberikan.
     * 
     * Apabila nilai integer yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  int      $integer Nilai integer yang akan dihitung jumlah digitnya.
     *
     * @return null|int          Jumlah digit dari nilai $integer, atau `null` jika nilai $integer dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testLength()
     * 
     * 
     */
    public static function length(int $integer): null|int;

    /**
     * Meneruskan pembulatan bilangan dari nilai integer yang diberikan.
     * 
     * Apabila 
     *      nilai integer yang diberikan dianggap tidak valid, atau 
     *      nilai level digit yang diberikan adalah `0`, atau
     *      nilai level digit yang diberikan melebihi jumlah digit nilai integer yang diberikan,
     * maka akan meneruskan `null`.
     *
     * @param  int              $integer Nilai integer yang akan dibulatkan.
     * @param  int              $digit   Level digit pembulatan bilangan.
     * @param  IntegerRoundType $type    Tipe pembulatan yang akan dilakukan.
     *
     * @return null|int                  Hasil pembulatan bilangan nilai $integer, atau `null` jika nilai $integer/$digit dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testRoundNearest()
     * @see    IntegerUtilsTest::testRoundUp()
     * @see    IntegerUtilsTest::testRoundDown()
     * 
     * 
     */
    public static function round(int $integer, int $digit, IntegerRoundType $type): null|int;

    /**
     * Meneruskan pembulatan bilangan ke terdekat dari nilai integer yang diberikan.
     * 
     * Apabila 
     *      nilai integer yang diberikan dianggap tidak valid, atau 
     *      nilai level digit yang diberikan adalah `0`, atau
     *      nilai level digit yang diberikan melebihi jumlah digit nilai integer yang diberikan,
     * maka akan meneruskan `null`.
     *
     * @param  int              $integer Nilai integer yang akan dibulatkan.
     * @param  int              $digit   Level digit pembulatan bilangan.
     *
     * @return null|int                  Hasil pembulatan bilangan nilai $integer, atau `null` jika nilai $integer/$digit dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testRoundNearest()
     * 
     * 
     */
    public static function roundNearest(int $integer, int $digit): null|int;

    /**
     * Meneruskan pembulatan bilangan ke atas dari nilai integer yang diberikan.
     * 
     * Apabila 
     *      nilai integer yang diberikan dianggap tidak valid, atau 
     *      nilai level digit yang diberikan adalah `0`, atau
     *      nilai level digit yang diberikan melebihi jumlah digit nilai integer yang diberikan,
     * maka akan meneruskan `null`.
     *
     * @param  int              $integer Nilai integer yang akan dibulatkan.
     * @param  int              $digit   Level digit pembulatan bilangan.
     *
     * @return null|int                  Hasil pembulatan bilangan nilai $integer, atau `null` jika nilai $integer/$digit dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testRoundUp()
     * 
     * 
     */
    public static function roundUp(int $integer, int $digit): null|int;

    /**
     * Meneruskan pembulatan bilangan ke bawah dari nilai integer yang diberikan.
     * 
     * Apabila 
     *      nilai integer yang diberikan dianggap tidak valid, atau 
     *      nilai level digit yang diberikan adalah `0`, atau
     *      nilai level digit yang diberikan melebihi jumlah digit nilai integer yang diberikan,
     * maka akan meneruskan `null`.
     *
     * @param  int              $integer Nilai integer yang akan dibulatkan.
     * @param  int              $digit   Level digit pembulatan bilangan.
     *
     * @return null|int                  Hasil pembulatan bilangan nilai $integer, atau `null` jika nilai $integer/$digit dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testRoundDown()
     * 
     * 
     */
    public static function roundDown(int $integer, int $digit): null|int;

    /**
     * Mengonversi nilai integer yang diberikan ke dalam bentuk boolean.
     * 
     * Meneruskan `true` jika nilai integer yang diberikan adalah `1`, dan `false` jika bernilai `0`.
     * 
     * Apabila nilai integer yang diberikan bukan `1` maupun `0`, maka dianggap tidak valid dan akan meneruskan `null`.
     *
     * @param  int       $integer Nilai integer yang akan dikonversi ke dalam bentuk boolean.
     *
     * @return null|bool          Hasil konversi nilai $integer ke dalam bentuk boolean, atau `null` jika nilai $integer dianggap tidak valid. 
     * 
     * @see    IntegerUtilsTest::testToBoolean()
     * 
     * 
     */
    public static function toBoolean(int $integer): null|bool;

    /**
     * Mengonversi nilai integer yang diberikan ke dalam bentuk float.
     * 
     * Apabila nilai integer diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  int      $integer Nilai integer yang akan dikonversi ke dalam bentuk float.
     *
     * @return null|float        Hasil konversi nilai $integer ke dalam bentuk float, atau `null` jika nilai $integer dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testToFloat()
     * 
     * 
     */
    public static function toFloat(int $integer): null|float;

    /**
     * Mengonversi nilai integer yang diberikan ke dalam bentuk string.
     * 
     * Apabila nilai integer yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  int         $integer Nilai integer yang akan dikonversi ke dalam bentuk string.
     *
     * @return null|string          Hasil konversi nilai $integer ke dalam bentuk string, atau `null` jika nilai $integer dianggap tidak valid.
     * 
     * @see    IntegerUtilsTest::testToString()
     * 
     * 
     */
    public static function toString(int $integer): null|string;
}
