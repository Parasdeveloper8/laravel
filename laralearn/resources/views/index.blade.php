@include('common.header')
<!-- pass data in main sub view -->
<!-- you can check if view exist -->
@include('common.main',["main"=>"dive into Laravel"])

<fieldset>
    <legend><b>Component</b></legend>
<!--component-->
<x-message class="success" msg="success"/>
<x-message class="error" msg="error 404"/>
<!--@includeIf('common.path')-->
</fieldset>

<fieldset>
    <legend><b>URL generation</b></legend>
   <!-- <p>{{url()->current()}}</p> -->
    <p>{{URL::current()}}</p>
    <!--<p>{{url()->full()}}</p>-->
    <p>{{URL::full()}}</p>
    <p>{{URL::previous()}}</p> <!--Get previous url from where you came-->
    <a href='{{URL::to("/userForm")}}'>Go</a> <!-- go to page -->
    <a href='{{route("us")}}'>Go</a> <!-- using named routes -->
    <!--<a href='{{URL::to("/userForm",["anil"])}}'>Go</a>--> <!-- URL with child path -->
</fieldset>
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