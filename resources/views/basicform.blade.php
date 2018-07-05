@extends('home')
@section('title','Dashboard')
@section('contenido')
<div class="container-fluid">
    <div class="block-header">
        <h2>
            BASIC FORM ELEMENTS
        </h2>
    </div>
    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        INPUT
                        <small>
                            Different sizes and widths
                        </small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">
                        Basic Examples
                    </h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="Username" type="text"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="Password" type="password"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">
                        Different Widths
                    </h2>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-6" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-6" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-4" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-4" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-4" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-3" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-3" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-3" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="col-sm-3" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">
                        Different Sizes
                    </h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-group-lg">
                                <div class="form-line">
                                    <input class="form-control" placeholder="Large Input" type="text"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" placeholder="Default Input" type="text"/>
                                </div>
                            </div>
                            <div class="form-group form-group-sm">
                                <div class="form-line">
                                    <input class="form-control" placeholder="Small Input" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">
                        Floating Label Examples
                    </h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input class="form-control" type="text">
                                        <label class="form-label">
                                            Username
                                        </label>
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input class="form-control" type="password">
                                        <label class="form-label">
                                            Password
                                        </label>
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float form-group-lg">
                                <div class="form-line">
                                    <input class="form-control" type="text"/>
                                    <label class="form-label">
                                        Large Input
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input class="form-control" type="text"/>
                                    <label class="form-label">
                                        Default Input
                                    </label>
                                </div>
                            </div>
                            <div class="form-group form-float form-group-sm">
                                <div class="form-line">
                                    <input class="form-control" type="text"/>
                                    <label class="form-label">
                                        Small Input
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">
                        Input Status
                    </h2>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line focused">
                                    <input class="form-control" placeholder="Statu Focused" type="text" value="Focused"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-line disabled">
                                    <input class="form-control" disabled="" placeholder="Disabled" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Input -->
    <!-- Textarea -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TEXTAREA
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">
                        Basic Example
                    </h2>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control no-resize" placeholder="Please type what you want..." rows="4">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="card-inside-title">
                        Auto Growing Vertical Direction
                        <small>
                            Taken from
                            <a href="https://github.com/jackmoore/autosize/tree/master" target="_blank">
                                github.com/jackmoore/autosize/tree/master
                            </a>
                        </small>
                    </h2>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea class="form-control no-resize auto-growth" placeholder="Please type what you want... And please don't forget the ENTER key press multiple times :)" rows="1">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Textarea -->
    <!-- Select -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        SELECT
                        <small>
                            Taken from
                            <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">
                                silviomoreto.github.io/bootstrap-select
                            </a>
                        </small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <select class="form-control show-tick">
                                <option value="">
                                    -- Please select --
                                </option>
                                <option value="10">
                                    10
                                </option>
                                <option value="20">
                                    20
                                </option>
                                <option value="30">
                                    30
                                </option>
                                <option value="40">
                                    40
                                </option>
                                <option value="50">
                                    50
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control" disabled="">
                                <option value="">
                                    Disabled
                                </option>
                                <option value="10">
                                    10
                                </option>
                                <option value="20">
                                    20
                                </option>
                                <option value="30">
                                    30
                                </option>
                                <option value="40">
                                    40
                                </option>
                                <option value="50">
                                    50
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Select -->
    <!-- Checkbox -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CHECKBOX
                        <small>
                            Taken from
                            <a href="http://materializecss.com/" target="_blank">
                                materializecss.com
                            </a>
                        </small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">
                        Basic Examples
                    </h2>
                    <div class="demo-checkbox">
                        <input checked="" id="basic_checkbox_1" type="checkbox"/>
                        <label for="basic_checkbox_1">
                            Default
                        </label>
                        <input checked="" class="filled-in" id="basic_checkbox_2" type="checkbox"/>
                        <label for="basic_checkbox_2">
                            Filled In
                        </label>
                        <input checked="" disabled="" id="basic_checkbox_3" type="checkbox"/>
                        <label for="basic_checkbox_3">
                            Default - Disabled
                        </label>
                        <input checked="" class="filled-in" disabled="" id="basic_checkbox_4" type="checkbox"/>
                        <label for="basic_checkbox_4">
                            Filled In - Disabled
                        </label>
                    </div>
                    <h2 class="card-inside-title">
                        With Material Design Colors
                    </h2>
                    <div class="demo-checkbox">
                        <input checked="" class="chk-col-red" id="md_checkbox_1" type="checkbox"/>
                        <label for="md_checkbox_1">
                            RED
                        </label>
                        <input checked="" class="chk-col-pink" id="md_checkbox_2" type="checkbox"/>
                        <label for="md_checkbox_2">
                            PINK
                        </label>
                        <input checked="" class="chk-col-purple" id="md_checkbox_3" type="checkbox"/>
                        <label for="md_checkbox_3">
                            PURPLE
                        </label>
                        <input checked="" class="chk-col-deep-purple" id="md_checkbox_4" type="checkbox"/>
                        <label for="md_checkbox_4">
                            DEEP PURPLE
                        </label>
                        <input checked="" class="chk-col-indigo" id="md_checkbox_5" type="checkbox"/>
                        <label for="md_checkbox_5">
                            INDIGO
                        </label>
                        <input checked="" class="chk-col-blue" id="md_checkbox_6" type="checkbox"/>
                        <label for="md_checkbox_6">
                            BLUE
                        </label>
                        <input checked="" class="chk-col-light-blue" id="md_checkbox_7" type="checkbox"/>
                        <label for="md_checkbox_7">
                            LIGHT BLUE
                        </label>
                        <input checked="" class="chk-col-cyan" id="md_checkbox_8" type="checkbox"/>
                        <label for="md_checkbox_8">
                            CYAN
                        </label>
                        <input checked="" class="chk-col-teal" id="md_checkbox_9" type="checkbox"/>
                        <label for="md_checkbox_9">
                            TEAL
                        </label>
                        <input checked="" class="chk-col-green" id="md_checkbox_10" type="checkbox"/>
                        <label for="md_checkbox_10">
                            GREEN
                        </label>
                        <input checked="" class="chk-col-light-green" id="md_checkbox_11" type="checkbox"/>
                        <label for="md_checkbox_11">
                            LIGHT GREEN
                        </label>
                        <input checked="" class="chk-col-lime" id="md_checkbox_12" type="checkbox"/>
                        <label for="md_checkbox_12">
                            LIME
                        </label>
                        <input checked="" class="chk-col-yellow" id="md_checkbox_13" type="checkbox"/>
                        <label for="md_checkbox_13">
                            YELLOW
                        </label>
                        <input checked="" class="chk-col-amber" id="md_checkbox_14" type="checkbox"/>
                        <label for="md_checkbox_14">
                            AMBER
                        </label>
                        <input checked="" class="chk-col-orange" id="md_checkbox_15" type="checkbox"/>
                        <label for="md_checkbox_15">
                            ORANGE
                        </label>
                        <input checked="" class="chk-col-deep-orange" id="md_checkbox_16" type="checkbox"/>
                        <label for="md_checkbox_16">
                            DEEP ORANGE
                        </label>
                        <input checked="" class="chk-col-brown" id="md_checkbox_17" type="checkbox"/>
                        <label for="md_checkbox_17">
                            BROWN
                        </label>
                        <input checked="" class="chk-col-grey" id="md_checkbox_18" type="checkbox"/>
                        <label for="md_checkbox_18">
                            GREY
                        </label>
                        <input checked="" class="chk-col-blue-grey" id="md_checkbox_19" type="checkbox"/>
                        <label for="md_checkbox_19">
                            BLUE GREY
                        </label>
                        <input checked="" class="chk-col-black" id="md_checkbox_20" type="checkbox"/>
                        <label for="md_checkbox_20">
                            BLACK
                        </label>
                    </div>
                    <h2 class="card-inside-title">
                        With Material Design Colors - Filled In
                    </h2>
                    <div class="demo-checkbox">
                        <input checked="" class="filled-in chk-col-red" id="md_checkbox_21" type="checkbox"/>
                        <label for="md_checkbox_21">
                            RED
                        </label>
                        <input checked="" class="filled-in chk-col-pink" id="md_checkbox_22" type="checkbox"/>
                        <label for="md_checkbox_22">
                            PINK
                        </label>
                        <input checked="" class="filled-in chk-col-purple" id="md_checkbox_23" type="checkbox"/>
                        <label for="md_checkbox_23">
                            PURPLE
                        </label>
                        <input checked="" class="filled-in chk-col-deep-purple" id="md_checkbox_24" type="checkbox"/>
                        <label for="md_checkbox_24">
                            DEEP PURPLE
                        </label>
                        <input checked="" class="filled-in chk-col-indigo" id="md_checkbox_25" type="checkbox"/>
                        <label for="md_checkbox_25">
                            INDIGO
                        </label>
                        <input checked="" class="filled-in chk-col-blue" id="md_checkbox_26" type="checkbox"/>
                        <label for="md_checkbox_26">
                            BLUE
                        </label>
                        <input checked="" class="filled-in chk-col-light-blue" id="md_checkbox_27" type="checkbox"/>
                        <label for="md_checkbox_27">
                            LIGHT BLUE
                        </label>
                        <input checked="" class="filled-in chk-col-cyan" id="md_checkbox_28" type="checkbox"/>
                        <label for="md_checkbox_28">
                            CYAN
                        </label>
                        <input checked="" class="filled-in chk-col-teal" id="md_checkbox_29" type="checkbox"/>
                        <label for="md_checkbox_29">
                            TEAL
                        </label>
                        <input checked="" class="filled-in chk-col-green" id="md_checkbox_30" type="checkbox"/>
                        <label for="md_checkbox_30">
                            GREEN
                        </label>
                        <input checked="" class="filled-in chk-col-light-green" id="md_checkbox_31" type="checkbox"/>
                        <label for="md_checkbox_31">
                            LIGHT GREEN
                        </label>
                        <input checked="" class="filled-in chk-col-lime" id="md_checkbox_32" type="checkbox"/>
                        <label for="md_checkbox_32">
                            LIME
                        </label>
                        <input checked="" class="filled-in chk-col-yellow" id="md_checkbox_33" type="checkbox"/>
                        <label for="md_checkbox_33">
                            YELLOW
                        </label>
                        <input checked="" class="filled-in chk-col-amber" id="md_checkbox_34" type="checkbox"/>
                        <label for="md_checkbox_34">
                            AMBER
                        </label>
                        <input checked="" class="filled-in chk-col-orange" id="md_checkbox_35" type="checkbox"/>
                        <label for="md_checkbox_35">
                            ORANGE
                        </label>
                        <input checked="" class="filled-in chk-col-deep-orange" id="md_checkbox_36" type="checkbox"/>
                        <label for="md_checkbox_36">
                            DEEP ORANGE
                        </label>
                        <input checked="" class="filled-in chk-col-brown" id="md_checkbox_37" type="checkbox"/>
                        <label for="md_checkbox_37">
                            BROWN
                        </label>
                        <input checked="" class="filled-in chk-col-grey" id="md_checkbox_38" type="checkbox"/>
                        <label for="md_checkbox_38">
                            GREY
                        </label>
                        <input checked="" class="filled-in chk-col-blue-grey" id="md_checkbox_39" type="checkbox"/>
                        <label for="md_checkbox_39">
                            BLUE GREY
                        </label>
                        <input checked="" class="filled-in chk-col-black" id="md_checkbox_40" type="checkbox"/>
                        <label for="md_checkbox_40">
                            BLACK
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Checkbox -->
    <!-- Radio -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        RADIO
                        <small>
                            Taken from
                            <a href="http://materializecss.com/" target="_blank">
                                materializecss.com
                            </a>
                        </small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">
                        Basic Examples
                    </h2>
                    <div class="demo-radio-button">
                        <input checked="" id="radio_1" name="group1" type="radio"/>
                        <label for="radio_1">
                            Radio - 1
                        </label>
                        <input id="radio_2" name="group1" type="radio"/>
                        <label for="radio_2">
                            Radio - 2
                        </label>
                        <input class="with-gap" id="radio_3" name="group1" type="radio"/>
                        <label for="radio_3">
                            Radio - With Gap
                        </label>
                        <input class="with-gap" id="radio_4" name="group1" type="radio"/>
                        <label for="radio_4">
                            Radio - With Gap
                        </label>
                        <input checked="" disabled="" id="radio_5" name="group2" type="radio"/>
                        <label for="radio_5">
                            Radio - Disabled
                        </label>
                        <input checked="" class="with-gap" disabled="" id="radio_6" name="group3" type="radio"/>
                        <label for="radio_6">
                            Radio - Disabled
                        </label>
                    </div>
                    <h2 class="card-inside-title">
                        With Material Design Colors
                        <small>
                            You can use material design colors which examples are
                            <code>
                                .radio-col-pink, .radio-col-cyan
                            </code>
                            class
                        </small>
                    </h2>
                    <div class="demo-radio-button">
                        <input checked="" class="radio-col-red" id="radio_7" name="group4" type="radio"/>
                        <label for="radio_7">
                            RED
                        </label>
                        <input class="radio-col-pink" id="radio_8" name="group4" type="radio"/>
                        <label for="radio_8">
                            PINK
                        </label>
                        <input class="radio-col-purple" id="radio_9" name="group4" type="radio"/>
                        <label for="radio_9">
                            PURPLE
                        </label>
                        <input class="radio-col-deep-purple" id="radio_10" name="group4" type="radio"/>
                        <label for="radio_10">
                            DEEP PURPLE
                        </label>
                        <input class="radio-col-indigo" id="radio_11" name="group4" type="radio"/>
                        <label for="radio_11">
                            INDIGO
                        </label>
                        <input class="radio-col-blue" id="radio_12" name="group4" type="radio"/>
                        <label for="radio_12">
                            BLUE
                        </label>
                        <input class="radio-col-light-blue" id="radio_13" name="group4" type="radio"/>
                        <label for="radio_13">
                            LIGHT BLUE
                        </label>
                        <input class="radio-col-cyan" id="radio_14" name="group4" type="radio"/>
                        <label for="radio_14">
                            CYAN
                        </label>
                        <input class="radio-col-teal" id="radio_15" name="group4" type="radio"/>
                        <label for="radio_15">
                            TEAL
                        </label>
                        <input class="radio-col-green" id="radio_16" name="group4" type="radio"/>
                        <label for="radio_16">
                            GREEN
                        </label>
                        <input class="radio-col-light-green" id="radio_17" name="group4" type="radio"/>
                        <label for="radio_17">
                            LIGHT GREEN
                        </label>
                        <input class="radio-col-lime" id="radio_18" name="group4" type="radio"/>
                        <label for="radio_18">
                            LIME
                        </label>
                        <input class="radio-col-yellow" id="radio_19" name="group4" type="radio"/>
                        <label for="radio_19">
                            YELLOW
                        </label>
                        <input class="radio-col-amber" id="radio_20" name="group4" type="radio"/>
                        <label for="radio_20">
                            AMBER
                        </label>
                        <input class="radio-col-orange" id="radio_21" name="group4" type="radio"/>
                        <label for="radio_21">
                            ORANGE
                        </label>
                        <input class="radio-col-deep-orange" id="radio_22" name="group4" type="radio"/>
                        <label for="radio_22">
                            DEEP ORANGE
                        </label>
                        <input class="radio-col-brown" id="radio_23" name="group4" type="radio"/>
                        <label for="radio_23">
                            BROWN
                        </label>
                        <input class="radio-col-grey" id="radio_24" name="group4" type="radio"/>
                        <label for="radio_24">
                            GREY
                        </label>
                        <input class="radio-col-blue-grey" id="radio_25" name="group4" type="radio"/>
                        <label for="radio_25">
                            BLUE GREY
                        </label>
                        <input class="radio-col-black" id="radio_26" name="group4" type="radio"/>
                        <label for="radio_26">
                            BLACK
                        </label>
                    </div>
                    <h2 class="card-inside-title">
                        With Material Design Colors - With Gap
                        <small>
                            Add to
                            <code>
                                .with-gap
                            </code>
                            class
                        </small>
                    </h2>
                    <div class="demo-radio-button">
                        <input checked="" class="with-gap radio-col-red" id="radio_30" name="group5" type="radio"/>
                        <label for="radio_30">
                            RED
                        </label>
                        <input class="with-gap radio-col-pink" id="radio_31" name="group5" type="radio"/>
                        <label for="radio_31">
                            PINK
                        </label>
                        <input class="with-gap radio-col-purple" id="radio_32" name="group5" type="radio"/>
                        <label for="radio_32">
                            PURPLE
                        </label>
                        <input class="with-gap radio-col-deep-purple" id="radio_33" name="group5" type="radio"/>
                        <label for="radio_33">
                            DEEP PURPLE
                        </label>
                        <input class="with-gap radio-col-indigo" id="radio_34" name="group5" type="radio"/>
                        <label for="radio_34">
                            INDIGO
                        </label>
                        <input class="with-gap radio-col-blue" id="radio_35" name="group5" type="radio"/>
                        <label for="radio_35">
                            BLUE
                        </label>
                        <input class="with-gap radio-col-light-blue" id="radio_36" name="group5" type="radio"/>
                        <label for="radio_36">
                            LIGHT BLUE
                        </label>
                        <input class="with-gap radio-col-cyan" id="radio_37" name="group5" type="radio"/>
                        <label for="radio_37">
                            CYAN
                        </label>
                        <input class="with-gap radio-col-teal" id="radio_38" name="group5" type="radio"/>
                        <label for="radio_38">
                            TEAL
                        </label>
                        <input class="with-gap radio-col-green" id="radio_39" name="group5" type="radio"/>
                        <label for="radio_39">
                            GREEN
                        </label>
                        <input class="with-gap radio-col-light-green" id="radio_40" name="group5" type="radio"/>
                        <label for="radio_40">
                            LIGHT GREEN
                        </label>
                        <input class="with-gap radio-col-lime" id="radio_41" name="group5" type="radio"/>
                        <label for="radio_41">
                            LIME
                        </label>
                        <input class="with-gap radio-col-yellow" id="radio_42" name="group5" type="radio"/>
                        <label for="radio_42">
                            YELLOW
                        </label>
                        <input class="with-gap radio-col-amber" id="radio_43" name="group5" type="radio"/>
                        <label for="radio_43">
                            AMBER
                        </label>
                        <input class="with-gap radio-col-orange" id="radio_44" name="group5" type="radio"/>
                        <label for="radio_44">
                            ORANGE
                        </label>
                        <input class="with-gap radio-col-deep-orange" id="radio_45" name="group5" type="radio"/>
                        <label for="radio_45">
                            DEEP ORANGE
                        </label>
                        <input class="with-gap radio-col-brown" id="radio_46" name="group5" type="radio"/>
                        <label for="radio_46">
                            BROWN
                        </label>
                        <input class="with-gap radio-col-grey" id="radio_47" name="group5" type="radio"/>
                        <label for="radio_47">
                            GREY
                        </label>
                        <input class="with-gap radio-col-blue-grey" id="radio_48" name="group5" type="radio"/>
                        <label for="radio_48">
                            BLUE GREY
                        </label>
                        <input class="with-gap radio-col-black" id="radio_49" name="group5" type="radio"/>
                        <label for="radio_49">
                            BLACK
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Radio -->
    <!-- Switch Button -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        SWITCH BUTTON
                        <small>
                            Taken from
                            <a href="http://materializecss.com/" target="_blank">
                                materializecss.com
                            </a>
                        </small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <h2 class="card-inside-title">
                        Basic Examples
                    </h2>
                    <div class="demo-switch">
                        <div class="switch">
                            <label>
                                OFF
                                <input checked="" type="checkbox">
                                    <span class="lever">
                                    </span>
                                    ON
                                </input>
                            </label>
                        </div>
                        <div class="switch">
                            <label>
                                DISABLED
                                <input disabled="" type="checkbox">
                                    <span class="lever">
                                    </span>
                                </input>
                            </label>
                        </div>
                    </div>
                    <h2 class="card-inside-title">
                        With Material Design Colors
                        <small>
                            You can use material design colors which examples are
                            <code>
                                .switch-col-pink, .switch-col-teal
                            </code>
                            class
                        </small>
                    </h2>
                    <div class="demo-switch">
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    RED
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-red">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    PINK
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-pink">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    PURPLE
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-purple">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    DEEP PURPLE
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-deep-purple">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    INDIGO
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-indigo">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    BLUE
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-blue">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    LIGHT BLUE
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-light-blue">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    CYAN
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-cyan">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    TEAL
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-teal">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    GREEN
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-green">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    LIGHT GREEN
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-light-green">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    LIME
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-lime">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    YELLOW
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-yellow">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    AMBER
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-amber">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    ORANGE
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-orange">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    DEEP ORANGE
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-deep-orange">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    BROWN
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-brown">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    GREY
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-grey">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    BLUE GREY
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-blue-grey">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="demo-switch-title">
                                    BLACK
                                </div>
                                <div class="switch">
                                    <label>
                                        <input checked="" type="checkbox">
                                            <span class="lever switch-col-black">
                                            </span>
                                        </input>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--#END# Switch Button -->
    <!--DateTime Picker -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        DATETIME PICKER
                        <small>
                            Taken from
                            <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">
                                github.com/T00rk/bootstrap-material-datetimepicker
                            </a>
                            with
                            <a href="http://momentjs.com/" target="_blank">
                                momentjs.com
                            </a>
                        </small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="material-icons">
                                    more_vert
                                </i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="datepicker form-control" placeholder="Please choose a date..." type="text">
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="timepicker form-control" placeholder="Please choose a time..." type="text">
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="datetimepicker form-control" placeholder="Please choose date & time..." type="text">
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--#END# DateTime Picker -->
</div>
@stop
