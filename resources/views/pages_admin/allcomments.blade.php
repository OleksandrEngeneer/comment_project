
                      <div class="container">
            <div class="row">
                <div class="col-6">
                @foreach($comments as $comment)
               <div> 
                        <h6>{{$comment['name']}}</h6>
                        <p> {{$comment['created_at']}}</p>
                        <div class="row">
                            <div class="col-8">
                            {{$comment['message']}}
                                <br>
                            </div>
                            <div class="col-4">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFRUVFxUXFxcXFRUXFxcXFxUXFxcVFxcYHSggGB0lHRcXITEhJSkrLi4uFx8zODMtNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAAAAQIFA//EACIQAQEBAAEDBAMBAAAAAAAAAAABETECYfBBUYHBIZHREv/EABYBAQEBAAAAAAAAAAAAAAAAAAADAv/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AO0UFGVgkAXBAACgUAAAAABBcADCAIKCGrgAi4AIoBAAFZwBSBQIYAAGAQACBQAACFAAAAAAAAACKgABQMCAGqm9gAAFQIBgaAUooIKgFAAAANMAAwgAFAAARQAAAAEVQBAAAAoAAAAFABaCUIAYAAQAAACgAtQAAABYAJgBAAIUhQBQEAAAAU1MAoUAMAAsDQAAAAKaAAYAQAFxUAQAAABUlIARKoKgAKgAQAMCAAFAKAAAAABCABQAyi/ACFVAAoBgAAQAAwAIAAABDQAAMAAwAAAAIAUoAB/rzQDVQAIFAhgAAAqAAqABgAECAAAAgKAAAAYYuAgEA+RQECgAAAAAYAKhAAANAAAlAAABQQwAAAAAAMBRPOVBAXQQAAAAKAAQAIAqACRQgCKAAAAAAAAQAIoM6pgBgAAEAA0ACgAoIUUEFxAAAApgKIAFIaBgACoAqAALva/qACBAVCqCAAAAAABQAIAAAAAAAAAFAAIAAAg0AgAKgAAAAAAAEAAXUAAABaCaKAgAAqAGBoCpi0EUAQFBCmAAAEAoCsqACAoAAEAAAEUAAFQUELAAAA/Ib2AUAC8JQBen7ZoAs/hFASJOABYl489wBZ9lUBlYAIvuACdSgHUKAk4S+igJ6tQATq5OkAeYAP/Z" alt="Письма мастера дзен">
                            </div>
                            <form method="POST" action="update">
                                @csrf
                                <select name="status" id="">
                                    <option value="new">new</option>
                                    <option value="confirmed">confirmed</option>
                                    <option value="blocked">blocked</option>
                                </select>
                                <input type="hidden" name="id" value="{{$comment['id']}}">
                                <input type="submit" name="check">
                            </form>
                        </div>
                    </div>
                    <hr>               
                </div>  
                @endforeach
            </div>
        </div>
                 
                 
