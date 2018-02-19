@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')


{{--  Page title  --}}
@section('page_title', 'HOME')

{{--  Page Content  --}}
@section('content')

        <div class="x_panel">
          <div class="x_title">
            <h2>Plain Page</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              Add content to the page ...              
          </div>
        </div>
       <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><i class="fa fa-bell"></i> Notifications <small>Styled &amp; Custom notifications</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <p>Regular notifications</p>
                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Regular Success',
                                  text: 'That thing that you were trying to do worked!',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });">Success</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'New Thing',
                                  text: 'Just to let you know, something happened.',
                                  type: 'info',
                                  styling: 'bootstrap3'
                              });">Info</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Regular Notice',
                                  text: 'Check me out! I\'m a notice.',
                                  styling: 'bootstrap3'
                              });">Notice</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Oh No!',
                                  text: 'Something terrible happened.',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              });">Error</button>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Oh No!',
                                  text: 'Something terrible happened.',
                                  type: 'info',
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Dark</button>

                  <hr>

                  <p>Sticky notifications.. these wont close unless user closes them.</p>
                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Success',
                                  text: 'Sticky success... I\'m not even gonna make a joke.',
                                  type: 'success',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Success</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Info',
                                  text: 'Sticky Info... I\'m not even gonna make a joke.',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Info</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Warning',
                                  text: 'Sticky Warning... I\'m not even gonna make a joke.',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Warning</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Danger',
                                  text: 'Sticky Danger... I\'m not even gonna make a joke.',
                                  type: 'error',
                                  hide: false,
                                  styling: 'bootstrap3'
                              });">Error</button>


                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Sticky Success',
                                  text: 'Sticky success... I\'m not even gonna make a joke.',
                                  type: 'info',
                                  hide: false,
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Dark</button>

                  <hr>

                  <button class="btn btn-default source" onclick="new PNotify({
                                  title: 'Non-Blocking Notice',
                                  type: 'info',
                                  text: 'When you hover over me I\'ll fade to show the elements underneath. Feel free to click any of them just like I wasn\'t even here.',
                                  nonblock: {
                                      nonblock: true
                                  },
                                  styling: 'bootstrap3',
                                  addclass: 'dark'
                              });">Non-Blocking Notice</button>

                  <hr>

                  <div id="antoox">
                    <div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>

                  </div>

                  <button class="btn btn-default source" onclick="new TabbedNotification({
                                  title: 'Tabbed Notificat',
                                  text: 'Sticky success... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'success',
                                  sound: false
                              })">Success</button>

                  <button class="btn btn-default source" onclick="new TabbedNotification({
                                  title: 'Tabbed Notificat',
                                  text: 'Custom Info... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.',
                                  type: 'info',
                                  sound: false
                              })">Info</button>

                  <button class="btn btn-default source" onclick="new TabbedNotification({
                                  title: 'Tabbed Notificat',
                                  text: 'Custom Warning... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'warning',
                                  sound: false
                              })">Warning</button>

                  <button class="btn btn-default source" onclick="new TabbedNotification({
                                  title: 'Custom Notification error',
                                  text: 'Custom Error... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'error',
                                  sound: false
                              })">Error</button>

                  <button class="btn btn-default source" onclick="new TabbedNotification({
                                  title: 'Tabbed notification dark',
                                  text: 'Custom Dark... Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. ',
                                  type: 'dark',
                                  sound: false
                              })">Dark</button>


                </div>
              </div>
            </div>


@endsection

{{--  Optional script Blades  --}}
@section('script_blade')
    
@endsection