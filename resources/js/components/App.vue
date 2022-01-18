<template>
    <div>
        <Header></Header>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <Post :postData="{ title: 'Prova', description: 'Descrizione', img: 'https://picsum.photos/300/200', id: '1' }"></Post>
        </div>

        <Footer></Footer>
    </div>
</template>

<script>
import Footer from './partials/Footer.vue'
import Header from './partials/Header.vue'
import Post from './partials/Post.vue'

export default {
    name: 'App',
    components: { Footer, Header, Post },
    data() {
        return {
            msg: 'Titolo di prova da Vue JS'
        }
    }
}
</script>

<style>

</style>