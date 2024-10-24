async function fetchChannelBlocks(channelSlug) {
  let blocks = [];

  const url = `https://api.are.na/v2/channels/${channelSlug}`;
  try {
    const response = await fetch(url);
    if (!response.ok) {
      console.error(
        `Error fetching channel: ${response.status} ${response.statusText}`
      );
      return null;
    }
    const data = await response.json();
    const contents = data.contents || [];

    blocks = blocks.concat(contents);
  } catch (error) {
    console.error(`Error fetching channel: ${error}`);
    return null;
  }

  return blocks;
}

async function main() {
  const channelSlug = 'glossary-449bymxli-8';
  const blocks = await fetchChannelBlocks(channelSlug);

  if (!blocks) {
    return;
  }

  // Display the glossary on the webpage
  const glossaryList = document.querySelector('.glossary');
  blocks.forEach((entry) => {
    const listItem = document.createElement('li');
    const listTitle = document.createElement('div');
    const listText = document.createElement('div');
    listTitle.textContent = `${entry.title}`;
    listTitle.classList.add('glossary__title');
    listText.textContent = `${entry.content}`;
    listText.classList.add('glossary__text');

    listItem.append(listTitle);
    listItem.append(listText);

    glossaryList.appendChild(listItem);
  });
}

main();
