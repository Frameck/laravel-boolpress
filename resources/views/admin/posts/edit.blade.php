@extends('admin.layout')

@section('main-content')
    <div class="text-start">
        <form action="{{ route('admin.posts.update', $post->slug) }}" method="post">
            @csrf
            @method('put')

            <div class="text-start mt-5">
                <div class="mb-3">
                    <label for="field_title" class="form-label">Titolo del post</label>
                    <input type="text" class="form-control" name="title" id="field_title" value="{{ old('title') ?? $post->title }}">
                </div>
    
                <div class="mb-3">
                    <label for="field_image" class="form-label">Immagine</label>
                    <input type="url" class="form-control" name="img" id="field_image" value="{{ old('img') ?? $post->img }}">
                </div>
                
                <div class="mb-3">
                    <label for="field_text" class="form-label">Contenuto</label>
                    <textarea type="text" class="form-control" name="description" id="field_text">
                        {{ old('description') ?? $post->description }}
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="field_text" class="form-label">Categoria</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" 
                            @if($category->id === $post->category_id) selected
                            @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tag</label>
                    <select name="tag" id="tag_field" class="form-control" multiple>
                        @foreach($tagsList as $tag)
                            <option value="{{ $tag->id }}" 
                                @if ($post->tags->contains($tag)) selected @endif>
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

    
                <button class="btn btn-primary" type="submit">Salva</button>
            </div>
        </form>
        <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas)</script>
    </div>
@endsection