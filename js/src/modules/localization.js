export default function getLocalization(stringKey) {
  if (
    typeof window.Few_Crew_screenReaderText === 'undefined' ||
    typeof window.Few_Crew_screenReaderText[stringKey] === 'undefined'
  ) {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`)
    return ''
  }
  return window.Few_Crew_screenReaderText[stringKey]
}
