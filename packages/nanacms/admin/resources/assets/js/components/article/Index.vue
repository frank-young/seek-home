<template>
    <div class="container">
        <a href="article/create" class="btn btn-primary">添加文章</a>
        <div class="row" v-for="d in data">
            <div class="col-md-12">
                <a :href="'article/' + d.id + '/edit' ">{{d.title}}</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: 'article-index',
      props: {
          data: Array
      }
    }
</script>
