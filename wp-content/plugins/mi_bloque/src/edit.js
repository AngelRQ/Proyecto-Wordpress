/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText, MediaUpload, BlockControls } from '@wordpress/block-editor';
import { Button, ToolbarGroup } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes}) {
	const blockProps = useBlockProps();

	const removeImage = () => {
		setAttributes (
			{
				imageUrl: null,
				imageAlt: null,
			}
			
		);
	}

	const onSelectImage = (media) => {
		setAttributes (
			{
				imageUrl: media.url,
				imageAlt: media.alt,
			}
			
		);
	}


	return (
		<div {...blockProps}>
			<BlockControls>
				<ToolbarGroup>
					<MediaUpload
					onSelect={onSelectImage}
					allowedType={['image']}
					value={attributes.imageUrl}
					render={
						({open})=>(
							<Button onClick={open} className={attributes.imageUrl ? 'edit-image' : 'upload-image'}>
								{attributes.imageUrl? 'Editar imagen' : 'Subir imagen'}
							</Button>
						)
					}/>
				</ToolbarGroup>
			</BlockControls>
			{attributes.imageUrl && (
				<img src={attributes.imageUrl} alt={attributes.imageAlt} />
			)}
			<RichText
				tagName="h2"
				value={attributes.title}
				onChange={ (newTitle)=>setAttributes({title: newTitle}) }
				placeholder="Titulo"
			/>
		</div>
	);
}
