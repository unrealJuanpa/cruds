@include('dashboard.partials.sesion-flash-status')


            @if(session('status'))
                <div style="color:green; margin-bottom:30px;">
                    {{session('status')}}
                </div>
            @endif
            
            <div class="user-box">
                <input type="text" name="title" value="{{old('title', $post->title)}}">
                <label for="">Título</label>
                @error('title')
                    <div style="color:red; margin-bottom:30px;">    
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="user-box">
                <input type="text" name="slug"  value="{{old('slug', $post->slug)}}">    
                <label for="">Url corta</label>
                @error('slug')
                    <div style="color:red; margin-bottom:30px;">    
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="user-box">
                <textarea name="content">{{old('content', $post->content)}}</textarea>
                <label for="">Contenido</label>                
                @error('content')
                    <div style="color:red; margin-bottom:30px;">    
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="user-box">
                <textarea name="description" value="{{old('description', $post->description)}}">{{old('description')}}</textarea>
                <label for="">Descripción</label>
                @error('description')
                    <div style="color:red; margin-bottom:30px;">    
                        {{$message}}
                    </div>
                @enderror
            </div>

            <!-- php artisan migrate:refresh refresca BD
            <div class="user-box">
                <input name="content">
                <label for="">Contenido</label>                
            </div>

            <div class="user-box">
                <input name="description">    
                <label for="">Descripcion</label>
            </div>
        -->

            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Enviar
            </button>