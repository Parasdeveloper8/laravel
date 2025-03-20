@include('common.header')
<!-- pass data in main sub view -->
<!-- you can check if view exist -->
@include('common.main',["main"=>"dive into Laravel"])
<!--component-->
<x-message class="success" msg="success"/>
<x-message class="error" msg="error 404"/>
<!--@includeIf('common.path')-->
<style>
    /*Style for message component */
    .success{
        color:rgb(100,255,000);
        background-color:green;
        padding-left:auto;
        padding-right:auto;
        width:100px;
    }
    .error{
        color:rgb(200,000,000);
        background-color:red;
        padding-left:auto;
        padding-right:auto;
        width:100px;
    }
</style>