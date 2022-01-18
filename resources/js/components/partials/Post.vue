<template>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Post image-->
            <img class="card-img-top" :src="postData.img" :alt="postData.title" />
            <!-- Post details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Post name-->
                    <h5 class="fw-bolder">{{ postData.title }}</h5>
                    <!-- Description-->
                    <p>{{ postData.description }}</p>
                </div>
            </div>
            <!-- Post actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/posts/1">View details</a></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: { postData: Object }
}
</script>

<style>

</style>