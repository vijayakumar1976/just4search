<?php

//Get All Countries
function getAllCountries()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "countries ORDER BY country_id ASC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

function getAllStates()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "states ORDER BY state_id ASC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Country with given country Id
function getCountry($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "countries where country_id='".$arg."'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

function getState($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "states where state_id='".$arg."'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

//Get All Country with given country Id's
function getMultipleCountry($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "countries where country_id IN ( '".$arg."')";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

function getMultipleState($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "states where state_id IN ( '".$arg."')";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

function getMultipleCity($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "cities where city_id IN ( '".$arg."')";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Country Count
function getCountCountry()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "countries ORDER BY country_id DESC";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}
function getCountState()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "states ORDER BY state_id DESC";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

