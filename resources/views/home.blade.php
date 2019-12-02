@extends('layouts.app')

@section('content')

                    
                  
                      <img
                        class="center"
                        src="https://avatars.githubusercontent.com/aditpatil10"
                        style="border-radius: 50%; margin-top: 4%"
                        alt="Avatar"
                      />
                      <div style="text-align: center; margin: auto">
                        <header>
                          <h2 style="font-size: 50px; color: white" id="homename" contenteditable="true">
                          Adit Patil
                          </h2>
                        </header>
                        <p style="font-size: 20px; color: white" id="homebio" contenteditable="true">
                       God.
                        </p>
                        <button class="button">Hire me</button>
                        <button class="button">Download CV</button>
                      </div>
                      <button id="save">Click to Save</button>
                      <div style="text-align: center; padding-top: 4%; margin-bottom: 25% ">
                        <a
                          href="https://www.facebook.com/adi10.patil"
                          class="fa fa-facebook"
                          style="height: 50px; width:50px"
                        ></a>
                        <a
                          href="https://twitter.com/aditpatil10"
                          class="fa fa-twitter"
                          style="height: 50px; width:50px"
                        ></a>
                        <a
                          href="https://www.instagram.com/aditpatil10/"
                          class="fa fa-instagram "
                          style="height: 50px; width:50px"
                        ></a>
                        <a
                          href="https://www.linkedin.com/in/adit-patil-a21a02a9"
                          class="fa fa-linkedin"
                          style="height: 50px; width:50px"
                        ></a>
                      </div>
                      <footer>
                        <p>Copyrights @adi10</p>
                      </footer>
@endsection
