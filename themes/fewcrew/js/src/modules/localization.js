export default function getLocalization(stringKey) {
  if (
    typeof window.FewCrew_screenReaderText === 'undefined' ||
    typeof window.FewCrew_screenReaderText[stringKey] === 'undefined'
  ) {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`)
    return ''
  }
  return window.FewCrew_screenReaderText[stringKey]
}
