module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'card-event': "url('/public/images/bg-card.png')",
        'new-pattern': "url('/images/bg-card-baru.png')",
        'bg-baru' : "url('/images/bg-hover.png')",
      }),
      backgroundImage: ['hover', 'focus'],
      fontSize: {
        '4.5xl': '2.8rem', 
      },
      gridTemplateColumns: {
        '16': 'repeat(16, minmax(0, 1fr))',
        '14': 'repeat(14, minmax(0, 1fr))',
        '20': 'repeat(20, minmax(0, 1fr))',
      },
      gridColumn: {
        'span-16': 'span 16 / span 16'
      },
      gridColumnStart: {
        '13': '13',
        '14': '14',
        '15': '15',
        '16': '16',
        '17': '17',
        '18': '18',
        '19': '19',
        '20': '20',
      },
      gridColumnEnd: {
        '13': '13',
        '14': '14',
        '15': '15',
        '16': '16',
        '17': '17',
        '18': '18',
        '19': '19',
        '20': '20',
      },
      fontSize: {
        'xxs': '.5rem',
        'xxxs':'.3rem',
      },
      fontFamily: {
        'montserrat': ['montserrat', 'sans-serif'],
        'roboto': ['roboto'],
      },
      padding: {
        '97': '28rem',
        '98': '30rem',
        '99': '32rem',
        '100': '36rem',
        '101': '40rem',
        '102': '44rem',
        '103': '48rem',
      },
      margin: {
        '97': '28rem',
        '98': '30rem',
        '99': '32rem',
        '100': '36rem',
        '101': '40rem',
        '102': '44rem',
        '103': '48rem',
      },
      width: {
        '1/7': '14.2857143%',
        '2/7': '28.5714286%',
        '3/7': '42.8571429%',
        '4/7': '57.1428571%',
        '5/7': '71.4285714%',
        '6/7': '85.7142857%',
        '30': '7.5rem',
        '100': '60rem',
        '99': '50rem',
        '98': '40rem',
        '97.5': '35rem',
        '97': '30rem',
        '120': '60rem'
      },
      height: {
        '100': '25rem',
        '110': '27.5rem',
        '120': '30rem',
        '140': '35rem',
      },
      colors: {
        footer: '#30264F',
        landing: '#FDFAFE',
        testi: '#F56445',
        testi2: '#0F3E99',
        form: '#D396F8',
        cardEvent: '#F3DFFF',
        cardCompe: '#FFD8E8',
        cardMM: '#FFDAB2',
        cardLogis: '#FFEFAB',
        cardSponsor: '#BEFFF4',
        buttonVolunteer: '#A264B3',
        buttonCompe: '#F25889',
        buttonMM: '#FF8B0E',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
