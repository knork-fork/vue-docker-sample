<template>
    <div class="welcome-message">
        <div class="hashtag-icon">
            <div class="gg-hashtag" />
        </div>
        <div class="header">Welcome to #general!</div>
        <div class="subheader">This is the start of the #general channel.</div>
    </div>
</template>

<style scoped>
.welcome-message {
    margin-top: 100px;
    margin-bottom: 16px;
    margin-left: 16px;
    cursor: default;
}

.header {
    margin-top: 10px;
    color: white;
    font-size: 32px;
    font-weight: bold;
}

.subheader {
    margin-top: 5px;
    color: #b5b6b4;
}

.hashtag-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #404349;
    width: 68px;
    height: 68px;
    border-radius: 34px;
}

.gg-hashtag {
    box-sizing: border-box;
    position: relative;
    display: block;
    transform: scale(var(--ggs, 1)) skew(-10deg, 0deg);
    width: 14px;
    height: 34px;
    border-left: 3px solid;
    border-right: 3px solid;
    color: white;
}
.gg-hashtag::before {
    content: '';
    display: block;
    box-sizing: border-box;
    position: absolute;
    width: 34px;
    height: 14px;
    border-top: 3px solid;
    border-bottom: 3px solid;
    left: -13px;
    top: 10px;
}
</style>
