@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-6">

                    <form action="/" method="post" class="form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                          </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label for="Comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="Comment1" rows="3"></textarea>
                            <br> </br>
                         <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile">
                              </div>   
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <button type="submit" class="btn btn-primary">додати </button>
                            
                          </div>
                          <hr> 

                    </form>


                    <div> 
                        <h6>John Doe  john@doe.com</h6>
                        <p> 2021-07-13</p>
                        <div class="row">
                            <div class="col-8">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dicta tempora quas nemo doloribus eaque, qui temporibus quaerat cupiditate.
                                <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dicta 
                            </div>
                            <div class="col-4">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFRUVFxUXFxcXFRUXFxcXFxUXFxcVFxcYHSggGB0lHRcXITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAAAAQIFA//EACIQAQEBAAEDBAMBAAAAAAAAAAABETECYfBBUYHBIZHREv/EABYBAQEBAAAAAAAAAAAAAAAAAAADAv/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AO0UFGVgkAXBAACgUAAAAABBcADCAIKCGrgAi4AIoBAAFZwBSBQIYAAGAQACBQAACFAAAAAAAAACKgABQMCAGqm9gAAFQIBgaAUooIKgFAAAANMAAwgAFAAARQAAAAEVQBAAAAoAAAAFABaCUIAYAAQAAACgAtQAAABYAJgBAAIUhQBQEAAAAU1MAoUAMAAsDQAAAAKaAAYAQAFxUAQAAABUlIARKoKgAKgAQAMCAAFAKAAAAABCABQAyi/ACFVAAoBgAAQAAwAIAAABDQAAMAAwAAAAIAUoAB/rzQDVQAIFAhgAAAqAAqABgAECAAAAgKAAAAYYuAgEA+RQECgAAAAAYAKhAAANAAAlAAABQQwAAAAAAMBRPOVBAXQQAAAAKAAQAIAqACRQgCKAAAAAAAAQAIoM6pgBgAAEAA0ACgAoIUUEFxAAAApgKIAFIaBgACoAqAALva/qACBAVCqCAAAAAABQAIAAAAAAAAAFAAIAAAg0AgAKgAAAAAAAEAAXUAAABaCaKAgAAqAGBoCpi0EUAQFBCmAAAEAoCsqACAoAAEAAAEUAAFQUELAAAA/Ib2AUAC8JQBen7ZoAs/hFASJOABYl489wBZ9lUBlYAIvuACdSgHUKAk4S+igJ6tQATq5OkAeYAP/Z" alt="Письма мастера дзен">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div> 
                        <h6>John Doe  john@doe.com</h6>
                        <p> 2021-07-13</p>
                        <div class="row">
                            <div class="col-8">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dicta tempora quas nemo doloribus eaque, qui temporibus quaerat cupiditate
                                <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dicta 
                            </div>
                            <div class="col-4">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFRUVFxUXFxcXFRUXFxcXFxUXFxcVFxcYHSggGB0lHRcXITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAAAAQIFA//EACIQAQEBAAEDBAMBAAAAAAAAAAABETECYfBBUYHBIZHREv/EABYBAQEBAAAAAAAAAAAAAAAAAAADAv/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AO0UFGVgkAXBAACgUAAAAABBcADCAIKCGrgAi4AIoBAAFZwBSBQIYAAGAQACBQAACFAAAAAAAAACKgABQMCAGqm9gAAFQIBgaAUooIKgFAAAANMAAwgAFAAARQAAAAEVQBAAAAoAAAAFABaCUIAYAAQAAACgAtQAAABYAJgBAAIUhQBQEAAAAU1MAoUAMAAsDQAAAAKaAAYAQAFxUAQAAABUlIARKoKgAKgAQAMCAAFAKAAAAABCABQAyi/ACFVAAoBgAAQAAwAIAAABDQAAMAAwAAAAIAUoAB/rzQDVQAIFAhgAAAqAAqABgAECAAAAgKAAAAYYuAgEA+RQECgAAAAAYAKhAAANAAAlAAABQQwAAAAAAMBRPOVBAXQQAAAAKAAQAIAqACRQgCKAAAAAAAAQAIoM6pgBgAAEAA0ACgAoIUUEFxAAAApgKIAFIaBgACoAqAALva/qACBAVCqCAAAAAABQAIAAAAAAAAAFAAIAAAg0AgAKgAAAAAAAEAAXUAAABaCaKAgAAqAGBoCpi0EUAQFBCmAAAEAoCsqACAoAAEAAAEUAAFQUELAAAA/Ib2AUAC8JQBen7ZoAs/hFASJOABYl489wBZ9lUBlYAIvuACdSgHUKAk4S+igJ6tQATq5OkAeYAP/Z" alt="Письма мастера дзен">
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>  
            </div>
        </div>

        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>

    @endsection 