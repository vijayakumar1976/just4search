<?php

//Get All Listings
function getAllListing()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE  listing_is_delete != '2' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Trash Deleted Listings
function getAllTrashListing()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE  listing_is_delete = '2' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get particular Listing Using Listing Code
function getListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "listings where listing_code='" . $arg . "'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

//Get operational Listings Using Listing Id
function getAllListingOperationalTimings($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "listing_timings where listing_id='" . $arg . "'";
    $rs = mysqli_query($conn, $sql);

    $rows = array();

    while ($row = mysqli_fetch_assoc($rs)) {
        $row["start_time"] = date('g:i A', strtotime($row["start_time"]));
        $row["end_time"] = date('g:i A', strtotime($row["end_time"]));
        array_push($rows, $row);
    }

    return $rows;
}

//Get particular Listing Using Listing Slug
function getSlugListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "listings where listing_slug='" . $arg . "'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

//Get particular Listing Using Listing Code
function getIdListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM  " . TBL . "listings where listing_id='" . $arg . "'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

//Get All Listing with given User Id
function getAllListingUser($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE user_id= '$arg' AND listing_is_delete != '2' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Listing with given Category Id
function getAllListingCategory($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE category_id= '$arg' AND listing_is_delete != '2' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Listing with given User Id and Listing Id
function getAllListingUserListing($arg,$arg1)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE user_id= '$arg' AND listing_is_delete != '2' AND listing_id = '$arg1'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

//Get All Listing with given User Id and Listing Id
function getAllListingListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE  listing_is_delete != '2' AND listing_id = '$arg'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row;

}

//Get All Listings
function getAllNotNullServiceListing()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE  listing_is_delete != '2' AND service_image != '' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Listings
function getAllNotNullGalleryListing()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE  listing_is_delete != '2' AND gallery_image != '' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}

//Get All Listing Count
function getCountListing()
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE listing_is_delete != '2' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

//Listing Count using User Id
function getCountUserListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings  WHERE user_id= '$arg' AND listing_is_delete != '2' ORDER BY listing_id DESC";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

//Listing Count using Category Id
function getCountCategoryListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE listing_is_delete != '2' AND FIND_IN_SET('$arg', category_id)";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

//Listing Count using Country Id
function getCountCountryListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE  listing_is_delete != '2' AND country_id = '$arg'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

function getCountStateListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE  listing_is_delete != '2' AND state_id = '$arg'";
    $rst = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rst);
    return $row;

}

//Listing Count using City Id
function getCountCityListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE  listing_is_delete != '2' AND city_id = '$arg'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}
function getCountSubCityListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE  listing_is_delete != '2' AND sub_city_id = '$arg'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

//Get All Listing with given User Id and Listing Id
function getAllListingCities()
{
    global $conn;

    $sql = "SELECT city_id FROM " . TBL . "listings  WHERE listing_is_delete != '2' AND city_id != 0 GROUP BY city_id";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $rs;

}

function getAllListingSubCities()
{
    global $conn;

    $sql = "SELECT sub_city_id FROM " . TBL . "listings  WHERE listing_is_delete != '2' AND sub_city_id != 0 GROUP BY sub_city_id";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $rs;

}

//Get All Listing with given User Id and Listing Id
function getAllListingPageCities()
{
    global $conn;

    $sql = "SELECT GROUP_CONCAT(city_id) as city_id FROM  " . TBL . "listings WHERE  listing_is_delete != '2' AND city_id != 0 ORDER BY city_id ASC";

    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $rs;

}

function getAllListingPageSubCities()
{
    global $conn;

    $sql = "SELECT GROUP_CONCAT(sub_city_id) as sub_city_id FROM  " . TBL . "listings WHERE  listing_is_delete != '2' AND sub_city_id != 0 ORDER BY sub_city_id ASC";

    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $rs;

}

//Listing Count using Category Id
function getCountSubCategoryListing($arg)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE  listing_is_delete != '2' AND find_in_set('$arg',sub_category_id)";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($rs);
    return $row;

}

//Get All Listing with given User Id and Listing Id
function getExceptListingCategoryListing($arg,$arg1)
{
    global $conn;

    $sql = "SELECT * FROM " . TBL . "listings WHERE category_id= '$arg' AND listing_is_delete != '2' AND listing_id != '$arg1' ORDER BY listing_id DESC LIMIT 3";
    $rs = mysqli_query($conn, $sql);
    return $rs;

}


//Get particular Listing SEO Score using listing id
function getListingSeoScore($arg)
{
    global $conn;

    $sql = "select ( case seo_title when '' then 0 else 1 end +
        case seo_description when '' then 0 else 1 end +
        case seo_keywords when '' then 0 else 1 end ) 
        * 100 / 3 as complete FROM " . TBL . "listings WHERE listing_id = $arg";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    return $row[0];
}

?>