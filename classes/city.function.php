<?php

//Get All Cities
function getAllCities()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "cities GROUP BY city_name ORDER BY city_id  DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

function getAllSubCities()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "sub_cities GROUP BY sub_city_name ORDER BY sub_city_id  DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All city with given city Id
function getCity($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "cities where city_id='" . $arg . "'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}
function getSubCity($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "sub_cities where sub_city_id='" . $arg . "'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

function getSubCities($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "sub_cities where city_id='".$arg."' ORDER BY sub_city_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All City Count
function getCountCity()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "cities ORDER BY city_id DESC";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}
function getCountSubCity()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "sub_cities ORDER BY sub_city_id DESC";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}
function getCountSubCityCity($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "sub_cities WHERE city_id = '$arg'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}