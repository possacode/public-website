/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                accent: {
                    '500' : '#E34E14',
                    '700' : '#B6360E',
                },
            },
        },
        transitionTimingFunction: {
            'app-in': 'cubic-bezier(.25,1,.33,1)',
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}

