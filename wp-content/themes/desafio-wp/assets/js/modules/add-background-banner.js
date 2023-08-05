export default function addBackgroundBanner(attribute) {
  const bannerContainer = document.querySelector(`[${attribute}]`);

  if (bannerContainer) {
    const url = bannerContainer.getAttribute(attribute);
    if (url) bannerContainer.style.background = `url('${url}')`;
  }
}
