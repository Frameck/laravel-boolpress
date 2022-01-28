<template>
    <div>
        <section class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" :src="postData.img" :alt="postData.title" />
                <h1 class="text-white fs-3 fw-bolder">{{ postData.title }}</h1>
                <p class="text-white-50 mb-0">Detailed view of post with id {{ postData.id }}</p>
            </div>
        </section>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>{{ postData.title }}</h2>
                        <p class="lead">{{ postData.description }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Footer from '../../components/partials/Footer.vue'
import Header from '../../components/partials/Header.vue'

export default {
    name: 'Show',
    components: { Footer, Header },
    data() {
        return {
            postData: {
                type: Object,
            }
        }
    }, 
    methods: {
        fetchPost() {
            window.axios.get('/api/posts/' + this.$route.params.slug).then(res => {
                this.postData = res.data
            }).catch(err => {
                this.$router.replace({ name: 'not-found' })
            })
        }
    },
    mounted() {
        this.fetchPost()
    }
}
</script>

<style>

</style>