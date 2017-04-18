<template>
    <div class="container">
        <div class="row" v-for="d in data">
            <div class="col-md-12">
                {{d.title}}
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
