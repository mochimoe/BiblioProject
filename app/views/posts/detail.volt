{% extends 'template/base.volt' %}
{% block title %}{{ get_title() }}{% endblock %}

{% block content %}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="section-row"><h5 class=" font-weight-bold">Diskusi Lainnya</h5></div>
                <div class="card border mb-3 ">
                    <div class="card-body">
                        list diskusi lainnya
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="section-row"><h5 class=" font-weight-bold ">Halaman Detail</h5></div>

                <div class="section-row">
                    <h5 class="lead">{{posts.judul}}</h5>
                    <small>By : Author</small>
                </div>
                <div class="section-row">
                    <p>
                        {{posts.isi}}
                    </p>
                </div>

                <div class="dropdown-divider"></div>
                <div class="section-row"><h5 class="font-weight-bold">Komentar Netizen</h5></div>
                <div class="section-row">
                    <form action="/komen/create/{{posts.id}}" method="post">
                        <input type="text" name="isi_komen" class="form-control" placeholder="komen disini hyung...">
                        <div class="d-flex flex-row-reverse ">
                            <button class="btn btn-sm btn-dark">Komen skuy</button>
                        </div>
                    </form>
                    
                </div>
                {% for komen in komenss %}
                    {% for user in users %}
                        {% if (user.id == komen.id_user) %}
                <div class="card my-3">
                    <div class="card-title card-header font-weight-bold">{{user.nama}}</div>
                    <div class="card-body">
                        <p>{{komen.isi_komen}}</p>
                    </div>
                    <div class="card-footer">
                        {% if (user.id == auth['id']) %}
                        <a href="/komen/delete/{{komen.id}}" class="small-text">Hapus</a>
                        {% endif %}
                    </div>
                </div>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
                
            </div>
        </div>
    </div>
{% endblock %}