<template>
    <div class="container">
        <a href="carousel/create" class="btn btn-primary">添加轮播图</a>
        <div class="row" v-for="d in data">
            <div class="col-md-12">
                <a :href="'carousel/' + d.id + '/edit' ">{{d.title}}</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: 'carousel-index',
      props: {
          data: Array
      }
    }
</script>
