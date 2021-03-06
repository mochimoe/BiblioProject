{% extends 'template/base.volt' %}
{% block title %}{{ get_title() }}{% endblock %}

{% block content %}
<div class="p-3 d-flex justify-content-center">
    <div class="card mb-3" style="width:35%;">
        <div class="card-header">Edit Post</div>
        <div class="card-body">
            <form action="/posts/update/{{posts.id}}" method="post">
                <div class="form-group">
                    <label for="judul" class="">Judul Buku</label>
                    <input type="text" name="judul"class="form-control" value="{{posts.judul}}">
                </div>
                <div class="form-group">
                    <label for="judul" class=" ">Isi Post</label>
                    <textarea class="form-control" name="isi" value="">{{posts.isi}}</textarea>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Edit</button>
            </form>
        </div>
    </div>
    
</div>
{% endblock %}