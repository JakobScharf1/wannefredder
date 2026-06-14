import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioClassicFour } from './portfolio-classic-four';

describe('PortfolioClassicFour', () => {
  let component: PortfolioClassicFour;
  let fixture: ComponentFixture<PortfolioClassicFour>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioClassicFour]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioClassicFour);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
