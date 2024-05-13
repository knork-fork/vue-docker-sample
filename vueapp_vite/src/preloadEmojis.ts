export const emojiList = {
    'em-slightly_smiling_face': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f642.png',
    'em-smile': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f604.png',
    'em-grinning': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f600.png',
    'em-wink': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f609.png',
    'em-blush': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f60a.png',
    'em-joy': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f602.png',
    'em-angry': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f620.png',
    'em-cry': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f622.png',
    'em-heart_eyes': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f60d.png',
    'em-face_with_rolling_eyes': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f644.png',
    'em-sunglasses': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f60e.png',
    'em-slightly_frowning_face': 'https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f641.png',
};

export function preloadEmojis() {
    Object.values(emojiList).forEach(url => {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.href = url;
        link.as = 'image';
        document.head.appendChild(link);
    });
}