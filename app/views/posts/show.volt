{% extends 'template/base.volt' %}
{% block title %}{{ get_title() }}{% endblock %}

{% block content %}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="section-row"><h5 class=" font-weight-bold">Create Post</h5></div>
                <div class="card border mb-3 border-0 bg-secondary">
                    <div class="card-body">
                        <form action="/posts/save" method="post">
                            <div class="form-group">
                                <label for="judul" class="text-white">Judul Buku</label>
                                <input type="text" name="judul"class="form-control border border-0">
                            </div>
                            <div class="form-group">
                                <label for="judul" class="text-white ">Isi Post</label>
                                <textarea class="rounded border border-0 form-control" name="isi" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-light">Post</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="section-row"><h5 class=" font-weight-bold ">Linimasa</h5></div>
                {% for post in posts %}
                <div class="card mb-2">
                    <div class="card-header">
                        <a href="/posts/detail/{{post.id}}" class="card-title text-dark font-weight-bold">{{post.judul}}</a>
                        <div class="d-flex">
                            <small class="small-text pr-2">Rianti Nurul</small>
                            <a href="/posts/edit/{{post.id}}" class="small-text pr-2">Edit post</a>
                            <a href="/posts/delete/{{post.id}}" class="small-text ">Delete post</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-p">{{post.isi}}</p>                
                    </div>       
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}