<template>
    <div class="row img-wrap">
        <div class="col-md-12">
            <div class="img">
                <img :src="src" alt="">
            </div>
            <div class="upload">
                <form @submit.prevent="submit" name="loginForm" enctype="multipart/form-data">
                    <input type="hidden" name="_token" :value="token">
                    <div class="btn-wrap">
                        <input class="btn u-file" type="file" name="file">
                        <span class="btn btn-info btn-line btn-radius u-borwer">浏览</span>
                        <input class="btn btn-info btn-radius u-submit" type="submit" value="上传封面图片">
                    </div>

                </form>
            </div>
        </div>

    </div>
</template>

<script>
    const ERR_OK = 0
    const PATH = '/storage/'

    export default {
        props: {
            path: {
                type: String
            }
        },
        data() {
            return {
                token: window.Laravel.csrfToken,
                src: ''
            }
        },
        created() {
            if(this.path !== ''){
                this.src = PATH + this.path
                this.$parent.imagePath = this.path
                // if (this.src !== ''){
                //   this.src = PATH + this.path
                //   this.$parent.imagePath = this.path
                // } else {
                //   this.src = '/seek-home/public/images/banner.jpg'
                //   this.$parent.imagePath = '/seek-home/public/images/banner.jpg'
                // }
            }
        },
        methods: {
            submit(event) {
                let options = {}
                let formData = new FormData(event.target)

                options.headers = {'Content-Type': 'application/x-www-form-urlencoded'}
                options.emulateJSON = true

                this.$http.post('/image/upload', formData, options).then((res) => {
                    res = res.body
                    if (res.errno === ERR_OK) {
                        this.src = PATH + res.path
                        this.$parent.imagePath = res.path
                    }
                })
            }
            // showimagePath() {
            //     return this.imagePath
            // }
        }
    }
</script>

<style lang="less" scoped>
    .img-wrap {
        .img{
            min-height: 400px;
            max-height: 500px;
            margin-bottom: 20px;
            margin-top: 10px;
            background-color: #eee;
            overflow: hidden;
            border-radius: 5px;
            img {
                width: 100%;
                height: 100%;
            }
        }
        .upload {
            padding-bottom: 15px;
            border-bottom: 1px solid #f2f6f8;
            margin-bottom: 30px;
            .btn-wrap {
                position: relative;
                height: 35px;
                .btn {
                    position: absolute;
                    top: 0;
                    left: 0;
                }
                .u-file {
                    display: block;
                    width: 70px;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    z-index: 1;
                    outline: none;
                    cursor: pointer;
                }
                .u-borwer {
                    z-index: 0;
                }
                .u-submit{
                    left: 100px;
                }
            }
        }
    }
</style>
