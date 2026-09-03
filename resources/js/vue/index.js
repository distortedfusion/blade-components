import Accordion from './components/Accordion.vue'
import AccordionContent from './components/AccordionContent.vue'
import AccordionItem from './components/AccordionItem.vue'
import AccordionTitle from './components/AccordionTitle.vue'
import AccordionToggle from './components/AccordionToggle.vue'
import Alert from './components/Alert.vue'
import Avatar from './components/Avatar.vue'
import AvatarStack from './components/AvatarStack.vue'
import Badge from './components/Badge.vue'
import Btn from './components/Btn.vue'
import BtnGroup from './components/BtnGroup.vue'
import Breadcrumb from './components/Breadcrumb.vue'
import BreadcrumbEllipsis from './components/BreadcrumbEllipsis.vue'
import BreadcrumbItem from './components/BreadcrumbItem.vue'
import BreadcrumbSeparator from './components/BreadcrumbSeparator.vue'
import Card from './components/Card.vue'
import CardBody from './components/CardBody.vue'
import CardFooter from './components/CardFooter.vue'
import CardHeader from './components/CardHeader.vue'
import CardTitle from './components/CardTitle.vue'
import Container from './components/Container.vue'
import Currency from './components/Currency.vue'
import DateTime from './components/DateTime.vue'
import Description from './components/Description.vue'
import Empty from './components/Empty.vue'
import Footer from './components/Footer.vue'
import Header from './components/Header.vue'
import Heading from './components/Heading.vue'
import Kbd from './components/Kbd.vue'
import KbdGroup from './components/KbdGroup.vue'
import LayoutIcon from './components/LayoutIcon.vue'
import ListGroup from './components/ListGroup.vue'
import ListGroupItem from './components/ListGroupItem.vue'
import ListGroupItemTitle from './components/ListGroupItemTitle.vue'
import Main from './components/Main.vue'
import Number from './components/Number.vue'
import Ol from './components/Ol.vue'
import Paragraph from './components/Paragraph.vue'
import Pre from './components/Pre.vue'
import ProgressBar from './components/ProgressBar.vue'
import Pulser from './components/Pulser.vue'
import Separator from './components/Separator.vue'
import Sidebar from './components/Sidebar.vue'
import SidebarBackdrop from './components/SidebarBackdrop.vue'
import SidebarToggle from './components/SidebarToggle.vue'
import Spinner from './components/Spinner.vue'
import Stack from './components/Stack.vue'
import Table from './components/Table.vue'
import TableBody from './components/TableBody.vue'
import TableCaption from './components/TableCaption.vue'
import TableCell from './components/TableCell.vue'
import TableHead from './components/TableHead.vue'
import TableHeader from './components/TableHeader.vue'
import TableRow from './components/TableRow.vue'
import ThreeDot from './components/ThreeDot.vue'
import Ul from './components/Ul.vue'
import { SIDEBAR_EVENTS } from './sidebar-core.js'
import { useParallax } from './parallax.js'
import { useDdfsn } from './state.js'

export { Accordion as DdfsnAccordion, AccordionContent as DdfsnAccordionContent, AccordionItem as DdfsnAccordionItem, AccordionTitle as DdfsnAccordionTitle, AccordionToggle as DdfsnAccordionToggle, Alert as DdfsnAlert, Avatar as DdfsnAvatar, AvatarStack as DdfsnAvatarStack, Badge as DdfsnBadge, Btn as DdfsnBtn, BtnGroup as DdfsnBtnGroup, Breadcrumb as DdfsnBreadcrumb, BreadcrumbEllipsis as DdfsnBreadcrumbEllipsis, BreadcrumbItem as DdfsnBreadcrumbItem, BreadcrumbSeparator as DdfsnBreadcrumbSeparator, Card as DdfsnCard, CardBody as DdfsnCardBody, CardFooter as DdfsnCardFooter, CardHeader as DdfsnCardHeader, CardTitle as DdfsnCardTitle, Container as DdfsnContainer, Currency as DdfsnCurrency, DateTime as DdfsnDateTime, Description as DdfsnDescription, Empty as DdfsnEmpty, Footer as DdfsnFooter, Header as DdfsnHeader, Heading as DdfsnHeading, Kbd as DdfsnKbd, KbdGroup as DdfsnKbdGroup, LayoutIcon as DdfsnLayoutIcon, ListGroup as DdfsnListGroup, ListGroupItem as DdfsnListGroupItem, ListGroupItemTitle as DdfsnListGroupItemTitle, Main as DdfsnMain, Number as DdfsnNumber, Ol as DdfsnOl, Paragraph as DdfsnParagraph, Pre as DdfsnPre, ProgressBar as DdfsnProgressBar, Pulser as DdfsnPulser, Separator as DdfsnSeparator, Sidebar as DdfsnSidebar, SidebarBackdrop as DdfsnSidebarBackdrop, SidebarToggle as DdfsnSidebarToggle, Spinner as DdfsnSpinner, Stack as DdfsnStack, Table as DdfsnTable, TableBody as DdfsnTableBody, TableCaption as DdfsnTableCaption, TableCell as DdfsnTableCell, TableHead as DdfsnTableHead, TableHeader as DdfsnTableHeader, TableRow as DdfsnTableRow, ThreeDot as DdfsnThreeDot, Ul as DdfsnUl, SIDEBAR_EVENTS, useDdfsn, useParallax }

const components = {
    DdfsnAccordion: Accordion,
    DdfsnAccordionContent: AccordionContent,
    DdfsnAccordionItem: AccordionItem,
    DdfsnAccordionTitle: AccordionTitle,
    DdfsnAccordionToggle: AccordionToggle,
    DdfsnAlert: Alert,
    DdfsnAvatar: Avatar,
    DdfsnAvatarStack: AvatarStack,
    DdfsnBadge: Badge,
    DdfsnBtn: Btn,
    DdfsnBtnGroup: BtnGroup,
    DdfsnBreadcrumb: Breadcrumb,
    DdfsnBreadcrumbEllipsis: BreadcrumbEllipsis,
    DdfsnBreadcrumbItem: BreadcrumbItem,
    DdfsnBreadcrumbSeparator: BreadcrumbSeparator,
    DdfsnCard: Card,
    DdfsnCardBody: CardBody,
    DdfsnCardFooter: CardFooter,
    DdfsnCardHeader: CardHeader,
    DdfsnCardTitle: CardTitle,
    DdfsnContainer: Container,
    DdfsnCurrency: Currency,
    DdfsnDateTime: DateTime,
    DdfsnDescription: Description,
    DdfsnEmpty: Empty,
    DdfsnFooter: Footer,
    DdfsnHeader: Header,
    DdfsnHeading: Heading,
    DdfsnKbd: Kbd,
    DdfsnKbdGroup: KbdGroup,
    DdfsnLayoutIcon: LayoutIcon,
    DdfsnListGroup: ListGroup,
    DdfsnListGroupItem: ListGroupItem,
    DdfsnListGroupItemTitle: ListGroupItemTitle,
    DdfsnMain: Main,
    DdfsnNumber: Number,
    DdfsnOl: Ol,
    DdfsnParagraph: Paragraph,
    DdfsnPre: Pre,
    DdfsnProgressBar: ProgressBar,
    DdfsnPulser: Pulser,
    DdfsnSeparator: Separator,
    DdfsnSidebar: Sidebar,
    DdfsnSidebarBackdrop: SidebarBackdrop,
    DdfsnSidebarToggle: SidebarToggle,
    DdfsnSpinner: Spinner,
    DdfsnStack: Stack,
    DdfsnTable: Table,
    DdfsnTableBody: TableBody,
    DdfsnTableCaption: TableCaption,
    DdfsnTableCell: TableCell,
    DdfsnTableHead: TableHead,
    DdfsnTableHeader: TableHeader,
    DdfsnTableRow: TableRow,
    DdfsnThreeDot: ThreeDot,
    DdfsnUl: Ul,
};

export default {
    install(app) {
        for (const [name, component] of Object.entries(components)) {
            app.component(name, component);
        }

        if (typeof window !== "undefined") {
            useDdfsn();
        }
    },
}
