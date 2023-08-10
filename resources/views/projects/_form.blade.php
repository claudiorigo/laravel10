@csrf
<label>
    Título del proyecto <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label>
    URL del proyecto <br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label>
    Descripción del proyecto <br>
    <textarea name="description" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>
<a href="{{ route('projects.index') }}">← Volver</a><br>